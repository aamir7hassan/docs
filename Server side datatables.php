<?php 
	if($this->input->post('req')=='get_all_staff_dt')
			{
				// database col names
				$columns = array(
					//0 =>'staff.id',
					
					0 => 'lname',
					1 => 'fname',
					2 => 'email',
					3 => 'phone',
				);
				$limit = $this->input->post('length');
				$start = $this->input->post('start');
				$order = $columns[$this->input->post('order')[0]['column']];
				$dir = $this->input->post('order')[0]['dir'];
				$q1 = "select * from staff ";
				$items =  $this->model->query($q1,"all_array");
				$totalData = count($items);
				$totalFiltered = $totalData;
				if(empty($this->input->post('search')['value'])) {
					$q2 = "select r.*,c.title as cname from ".$this->tb_reviews." as r inner join ".$this->tb_review_categories." as c ON r.category_id=c.category_id order by $order $dir limit $start,$limit";
					$posts = $this->model->query($q2,'all_array');
				} else {
					$search = $this->input->post('search')['value'];
						$q3 = "select r.*,c.title as cname from ".$this->tb_reviews." as r inner join ".$this->tb_review_categories." as c ON r.category_id=c.category_id where ( r.title like '%".$search."%' || r.slug like '%".$search."%' || c.title like '%".$search."%')  order by $order $dir limit $start,$limit";
					$posts = $this->model->query($q3,'all_array');
					$totalFiltered = count($posts);
				}
				$data = array();
				if(!empty($posts)) {
					foreach($posts as $key=>$val) {
						$id = $val['sid'];
						$fun = "del('".$id."')";

						if(!empty($val['pattern'])) {
							$arr = explode(',',$val['pattern']);
							$leaves = count($arr);
						} else {
							$leaves = 0;
						}

						$action = "<a href='#' title='Mitarbeiter bearbeiten' class='text-info edit' data-toggle='tooltip' data-placement='top' data-edit='".$id."' ><span class='far fa-edit iconss'></span></a>
						<a href='#' data-toggle='tooltip' data-name='".$val['fname'].' '.$val['lname']."' data-placement='top' title='Urlaubstage pro Jahr festlegen' data-holiday='".$id."' class='text-primary holiday' ><span class='far fa-calendar-alt iconss'></span></a>";
						$indata['name']     = $val['fname'];
						$indata['lname']	= $val['lname'];
						$indata['email']    = $val['email'];
						$indata['number']		= $val['phone'];
						$indata['department']= $val['department'];
						
						$indata['supervisor']= $val['ufname']." ".$val['ulname'];
						$indata['action'] = $action;
						$data[] = $indata;
					}
				} // end empty posts
				$json_data = array(
					"draw"            => intval($this->input->post('draw')),
					"recordsTotal"    => intval($totalData),
					"recordsFiltered" => intval($totalFiltered),
					"data"            => $data
				);
				echo json_encode($json_data);
			} // end datatables
?>
<script>

    var url = "<?php echo base_url('admin/dashboard/ajax'); ?>";
    $('#data-table-default').DataTable({
			"processing": true,
			"responsive":true,
			"serverSide": true,
			"pageLength":50,
			"ajax":{
				"url": url,
				"dataType": "JSON",
				"type": "POST",
				"data":{ 'req':'get_all_reviews'}
			  },
			"columns": [
				{ "data": "id" },
				{ "data": "title" },
				{ "data": "created" },
				{ "data": "updated" },
				{ "data": "action" },
			],
			'columnDefs': [ {
			  'targets': [6],
			  'orderable': false,
			  'class'	: 'incenter'
			}],
			"fnDrawCallback": function(oSettings) {
				var rowCount = this.fnSettings().fnRecordsDisplay();
				if(rowCount<=10){
				  $('.dataTables_length').hide();
				  $('.dataTables_paginate').show();
				}
		   }
		});
</script>