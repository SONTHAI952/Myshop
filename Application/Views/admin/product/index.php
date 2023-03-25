<?php view('shared.admin.header', [
    'title' => 'Danh sách sản phẩm'
]); ?>
<?php if (!empty($message['error-delete'])) { ?>
<div class="alert alert-danger" id="error-delete-product">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"
        onclick="document.getElementById('error-delete-product').style.display='none'">&times;</button>
    <?= $message['error-delete'] ?? '' ?>
</div>
<?php } ?>
<?php if (!empty($message['success-delete'])) { ?>
<div class="alert alert-success" id="success-delete-product">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"
        onclick="document.getElementById('success-delete-product').style.display='none'">&times;</button>
    <?= $message['success-delete'] ?? '' ?>
</div>
<?php } ?>
<form action="./?module=admin&controller=product&action=searchProductFull" class="form-inline" method="post">

    <div class="form-group">
        <input class="form-control search-input" name="productSearch" placeholder="Tìm kiếm">
    </div>

    <button type="submit" class="btn btn-root search-btn">
        <i class="fas fa-search"></i>
    </button>
</form>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Danh mục</th>
            <th>Giá/Giá giảm</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Ảnh</th>
            <th class="text-right">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $model) : ?>
        <tr>
            <td><?= $model['id'] ?></td>
            <td><?= $model['name'] ?></td>
            <td><?= $model['category_name'] ?></td>
            <td><?= number_format($model['price']) ?> &#273; <span
                    class="badge badge-warning"><?= $model['sale_price'] > 0 ? '' . number_format($model['sale_price']) : 'không giảm' ?></span>
            </td>
            <td>
                <?php if ($model['status'] == 0) : ?>
                <span class="badge badge-danger">Ẩn</span>
                <?php else : ?>

                <span class="badge badge-success">Hiện</span>
                <?php endif; ?>
            </td>
            <td><?= $model['created_at'] ?></td>
            <td>
                <img src="./public/uploads/<?= $model['image'] ?>" width="60">
            </td>
            <td class="text-right">


                <a href="./?module=admin&controller=product&action=edit&id=<?= $model['id'] ?>"
                    class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>

                <a href="./?module=admin&controller=product&action=delete&id=<?= $model['id'] ?>"
                    class="btn btn-sm btn-danger btndelete"
                    onclick="return confirm('Bạn muốn xóa sản phẩm này ?')">
                    <i class="fas fa-trash"></i>
                </a>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr>
<?= $pagination ?>
<!-- Pagination -->

<?php view('shared.admin.footer'); ?>