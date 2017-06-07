<!-- eddited for IFB299 by James Roff & Carl Wirkus-->

<div id="module_title"><h1>FAQs</h1></div>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

<script>

	$(document).ready(function() {

	$('#faqTable').DataTable();

	});

</script>

<div id="table_wrapper">
  <table id="faqTable">

      <thead>

        <tr>

          <th>FAQ Question</th>

          <th>FAQ Answer</th>

          <th>Question Type</th>


        </tr>

      </thead>

      <tbody>

        <?php

          $data=$db->get('FAQ');

          foreach ($data as $FAQ) {

            echo '

            <tr id="FAQ">

              <td id="type">'. $FAQ["type"] .'</td>

              <td id="question">'. $FAQ["question"] .'</td>

              <td id="answer">'. $FAQ["answer"] .'</td>

            </tr>

            ';

          }

        ?>

      </tbody>

    </table>
    </div>
    <div id="tenant_dashboard_tag"><a href="/IFB299/modules/tenants/">Back To Dashboard</a></div>