
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Students</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary" href="<?= base_url('/students/create')?>">New</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    foreach ($students as $student) { ?>
                            <tr>
                                <td>
                                    <?php echo $student['name'] ?>
                                </td>
                                <td>
                                    <?php echo $student['last_name'] ?>
                                </td>
                                <td>
                                    <?php echo $student['address'] ?>
                                </td>
                                <td>
                                    <a class="btn btn-secondary"
                                        href="<?php echo base_url(['students','edit',$student['id']]);?>">Edit</a>
                                    <a class="btn btn-danger"
                                        href="<?php echo base_url(['students','delete',$student['id']]);?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>