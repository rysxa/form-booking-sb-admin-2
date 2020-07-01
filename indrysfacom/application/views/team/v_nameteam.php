<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data List Team</h1>

    <!-- Data Team Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Team Name</th>
                            <th>Team Leader</th>
                            <th>Employees</th>
                            <th>Equipments</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $dt): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>Team A</td>
                                <td>leader</td>
                                <td><?= $dt->name_employees ?></td>
                                <td>equip</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Team Name</th>
                            <th>Team Leader</th>
                            <th>Employees</th>
                            <th>Equipments</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->