<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Basic DataTables</h1>
            
        </div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                          <th>ID</th>
                            <th>Judul</th>
                            <th>Content</th>
                            <th>Image</th>
                           <th>Jenis Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id ?></td>
                            <td><?php echo $d->judul ?></td>
                            <td><?php echo $d->content ?></td>
                            <td><?php echo $d->image?></td>
                            <td><?php echo $d->jenis_cat?></td>
                            <td>
                                <a href="<?php echo base_url('/kategori/edit/') . $d->id ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/kategori/delete/') . $d->id ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
</main>

