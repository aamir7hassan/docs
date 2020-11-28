 <script>
 var url = "<?php echo base_url("admin/dashboard/ajax"); ?>";
    $(document).ready(function(){
		'columnDefs': [ {
          'targets': [6],
          'orderable': false,
        }],
      $('.tbl').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":{
            "url": url,
            "dataType": "JSON",
            "type": "POST",
            "data":{ 'req':'get_all_staff_dt'}
          },
        "columns": [
          { "data": "name" },
          { "data": "email" },
          { "data": "number" },
          { "data": "department" },
          { "data": "holiday" },

          { "data": "supervisor" },
          { "data": "action"},
        ],
        'columnDefs': [ {
          'targets': [6],
          'orderable': false,
        }],
        "fnDrawCallback": function(oSettings) {
            var rowCount = this.fnSettings().fnRecordsDisplay();
            if(rowCount<=10){
              $('.dataTables_length').hide();
              $('.dataTables_paginate').hide();
            }
       }
      }); // datatables
    });
	</script>
	
	
	<?php
	if($this->input->post('req')=='get_all_staff_dt')
			{
				// database col names
				$columns = array(
					0 =>'staff.id',
					1 => 'fname',
					2 => 'lname',
					3 => 'email',
					4 => 'phone',
					5 => 'department',
					//5 => 'holidays_ent',
					6 => 'year',
					7 => 'supervisor',
					8 => 'date_created',
				);
				$limit = $this->input->post('length');
				$start = $this->input->post('start');
				$order = $columns[$this->input->post('order')[0]['column']];
				$dir = $this->input->post('order')[0]['dir'];
				$q1 = "select s.*,e.id from staff as s inner join holiday_ent as e on s.id=e.staff_id where s.supervised='1' && e.year=".date('Y');
				$items =  $this->model->query($q1,"all_array");
				$totalData = count($items);
				$totalFiltered = $totalData;
				if(empty($this->input->post('search')['value'])) {
					$q2 = "select staff.*,staff.id as sid,a.*,users.id as uid,users.fname as ufname,e.holiday_ent,users.lname as ulname from staff inner join users ON staff.supervisor=users.id
					 inner join holiday_ent as e on e.staff_id=staff.id inner join attendance as a on a.staff_id=staff.id where staff.supervised='1' && e.year=".date('Y')." && a.year=".date('Y')." order by $order $dir limit $start,$limit";
					$posts = $this->model->query($q2,'all_array');
				} else {
					$search = $this->input->post('search')['value'];
					$q3 = "select staff.*,staff.id as sid,a.*,users.id as uid,e.holiday_ent,users.fname as ufname,users.lname as ulname from staff inner join users ON staff.supervisor=users.id
					inner join holiday_ent as e on e.staff_id=staff.id inner join attendance as a on a.staff_id=staff.id where staff.supervised='1' && e.year=".date('Y')." && a.year=".date('Y')." && ( staff.fname like '%".$search."%' || staff.email like '%".$search."%' || staff.department like '%".$search."%')  order by $order $dir limit $start,$limit";

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

						
						$action = "<a href='#' title='Mitarbeiter bearbeiten' class='text-info edit' data-toggle='tooltip' data-placement='top' data-edit='".$id."' ><span class='fa fa-edit iconss'></span></a>
						<a href='#' data-toggle='tooltip' data-name='".$val['fname'].' '.$val['lname']."' data-placement='top' title='Urlaubstage pro Jahr festlegen' data-holiday='".$id."' class='text-primary holiday' ><span class='fa fa-calendar iconss'></span></a>";
						$indata['name']     = $val['fname'];
						$indata['lname']	= $val['lname'];
						$indata['email']    = $val['email'];
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