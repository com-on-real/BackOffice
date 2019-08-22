<?php

$title = 'Ticket';
$description = '';


ob_start();
?>
<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Ajouter un ticket</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="ticket_subject">Sujet</label>
          <input type="text" class="form-control" id="ticket_subject" placeholder="Sujet">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" rows="10" placeholder="Enter ..."></textarea>
        </div>
        <div class="form-group">
          <label for="btnprio">Priorité</label>
          <button type="button" class="btn btn-block btn-success btn-sm">normal</button>
          <button type="button" class="btn btn-block btn-warning btn-sm">Haute</button>
          <button type="button" class="btn btn-block btn-danger btn-sm">Urgent</button>

        </div>
        <div class="form-group">
          <label for="LogsFile">Fichier de logs</label>
          <input type="file" id="LogsFile">

          <p class="help-block">non requis</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.box -->


</div>
<!-- /.box -->

<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Liste des tickets ( Visible uniquement par les admins et quand tu clic dessus sa affiche une
        modal avec les info et la possiblité de rajouter un message) </h3>

      <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
          <tr>
            <th>ID</th>
            <th>User</th>
            <th>Date</th>
            <th>Status</th>
            <th>Reason</th>
            <th>Avencement</th>
            <th>pourcentage</th>
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-success">résolus</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-red">55%</span></td>
          </tr>
          <tr>
            <td>219</td>
            <td>Alexander Pierce</td>
            <td>11-7-2014</td>
            <td><span class="label label-warning">en cours</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-red">55%</span></td>
          </tr>
          <tr>
            <td>657</td>
            <td>Bob Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-primary">en attente</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-red">55%</span></td>
          </tr>
          <tr>
            <td>175</td>
            <td>Mike Doe</td>
            <td>11-7-2014</td>
            <td><span class="label label-danger">non résolus</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-red">55%</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>
<?php

$content = ob_get_clean();