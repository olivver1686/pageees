<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new SQLite3('./api/.db.db');

if(isset($_POST['submit'])){
$sql = "DELETE FROM dns";
$db->exec($sql);
$db->exec("INSERT INTO dns(portal1, portal2, portal3, portal4, portal5, portal6, portal7, portal8, portal9, portal10, portal11, portal12, portal13, portal14, portal15, portal16, portal17, portal18, portal19, portal20) VALUES('".$_POST['portal1']."', '".$_POST['portal2']."', '".$_POST['portal3']."', '".$_POST['portal4']."', '".$_POST['portal5']."', '".$_POST['portal6']."', '".$_POST['portal7']."', '".$_POST['portal8']."', '".$_POST['portal9']."', '".$_POST['portal10']."', '".$_POST['portal11']."', '".$_POST['portal12']."', '".$_POST['portal13']."', '".$_POST['portal14']."', '".$_POST['portal15']."', '".$_POST['portal16']."', '".$_POST['portal17']."', '".$_POST['portal18']."', '".$_POST['portal19']."', '".$_POST['portal20']."')");
$db->close();
header("Location: dns.php");
}
include ('includes/header.php');


echo "            <div class=\"col-md-8 px-4\">\n";
echo "              <div class=\"card bg-dark text-white\">\n";
echo "                <div class=\"card-header card-header-warning\">\n";
echo "                  <h4 class=\"card-title\">Add DNS</h4>\n";
echo "                </div>\n";
echo "                <div class=\"card-body\">\n";
echo "                  <form  method=\"post\">\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 1</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal1\">\n";
echo "                      </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 2</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal2\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 3</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal3\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 4</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal4\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 5</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal5\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 6</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal6\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 7</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal7\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 8</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal8\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 9</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal9\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 10</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal10\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 11</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal11\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 12</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal12\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 13</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal13\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 14</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal14\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 15</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal15\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 16</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal16\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 17</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal17\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 18</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal18\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 29</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal19\">\n";
echo "                        </div>\n";
echo "                      <div>\n";
echo "                        <div class=\"form-group\">\n";
echo "                          <label class=\"bmd-label-floating\">Portal 20</label>\n";
echo "                          <input type=\"text\" class=\"form-control\" name=\"portal20\">\n";
echo "                        </div>\n";
echo "                        </div>\n";
echo "                      </div>\n";
echo "                      </div>\n";
echo "                      <div>\n";
echo "					<br><button type=\"submit\" name=\"submit\" class=\"btn btn-warning pull-right\">Submit</button>\n";
echo "				</form>\n";
echo "				</div>\n";
echo "              </div>\n";
echo "            </div>\n";
echo "		   </div>\n";
echo "    <br><br><br>\n";
include ('includes/footer.php');
echo "</body>\n";
echo "\n";
echo "</html>\n";
?>