<!-- Main Content -->
<div class="container my-5">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone_number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $s): ?>
                <tr>
                    <td><?php echo $s['student_id'] ?></td>
                    <td><?php echo $s['student_name'] ?></td>
                    <td><?php echo $s['gender'] ?></td>
                    <td><?php echo $s['phone_number'] ?></td>
                    <td>
                        <a href="index.php?page=edit&id=<?= $s['student_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <!-- <tr>
                <td>2</td>
                <td>John Doe</td>
                <td>Male</td>
                <td>
                    <a href="index.php?page=edit" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Linda Johnson</td>
                <td>Female</td>
                <td>
                    <a href="index.php?page=edit" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr> -->
        </tbody>
    </table>
</div>