<?php require('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><a href="add" calss="btn btn-info">add</a></h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
  <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Img</th>
                      <th>Icon</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data as $c): ?>
                    <tr>
                      <td><?= $c['name']; ?></td>
                      <td><img src="<?= PATH; ?>img/<?= $c['img']; ?>" width="100px" height="100px"></td>
                      <!-- <td><img src="/img/<?= $c['img']; ?>"></td> -->
                      <td><?= $c['icon']; ?></span></td>
                      <td><a href="/admincategory/update/<?= $c['id']; ?>" class="btn btn-defualt">update</a></td>
                      <td><a href="/admincategory/delete/<?= $c['id']; ?>" class="btn btn-danger">delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    <?php require('footer.php'); ?>
