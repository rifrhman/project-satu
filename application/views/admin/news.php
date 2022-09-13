<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg">
      <a href="" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"></i> Add News</a>
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date Created</th>
            <th scope="col">Title</th>
            <th scope="col">Tags</th>
            <th scope="col">Images</th>
            <th scope="col">News</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?= date('d-m-Y',) ?></td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>mlmlm</td>
            <td>
              <a href="" class="btn btn-info btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


</div>
<!-- /.container-fluid -->