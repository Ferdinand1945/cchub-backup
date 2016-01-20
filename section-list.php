<?php 

?>
  <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                    <thead>
                      <tr>
                        <th width="3%"><input type="checkbox" class="checkall"/></th>
                        <th>Personnummer</th>
                        <th width="10%">Namn</th>
                        <th width="10%">Typ</th>
                        <th width="7%">Id</th>
                        <th width="12%">Sökdatum</th>
                        <th width="10%">Konto</th>
                        <th width="9%">Status</th>
                        <th width="12%">Actions</th>
                      </tr>

                    </thead>
                    <?php
$conect = @mysql_connect("localhost", "root", "tMdUVx7xBmYUNvh5scU5sjBV") or die("No server found!");
mysql_select_db("cchub_api",$conect)or die("No database found!");

$result = "SELECT * FROM upload";
$resulte = mysql_query($result) or die('Error, query failed');
if(mysql_num_rows($resulte) == 0)
{
  echo "Database is empty <br>";
}
else
{
  while(list($id, $name, $type) = mysql_fetch_array($resulte))
  {
                    ?>
                    <tbody>
                      <tr>
                        <td><input type="checkbox"/></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $type;?></td>
                        <td><?php echo $id; ?></td>
                        <td>20-05-2014</td>
                        <td>ALD</td>
                        <td><span class="label label-sm label-success">Approved</span></td>
                        <td>
                          <a type="button" class="btn btn-green btn-xs" href="<?php echo $name;?>">Download PDF</a>
                          <br>
                          <br> 
                          <?php echo '<a type="button" href="delete_row.php?idd='.$id.'" class="btn btn-danger btn-xs">&nbsp; Delete <i class="fa fa-trash-o"> </i></a>'; ?>
                        </td>
                      </tr>
                    </tbody>
                    <?php
                        }
                      }
                    ?>
                  </table>