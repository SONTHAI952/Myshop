<?php view('shared.admin.header', [
    'title' => 'Danh sách tài khoản'
]); ?>

<form action="./?module=admin&controller=account&action=searchAccountFull" class="form-inline" method="post">

    <div class="form-group">
        <input class="form-control search-input" name="accountSearch" placeholder="Tìm kiếm">
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
            <th>Email</th>
            <th>Số ĐT</th>
            <th>Địa chỉ</th>
            <th>Thành phố</th>
            <th>Quyền</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th class="text-right">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $account) : ?>
            <tr>
                <td><?= htmlentities($account['id']) ?></td>
                <td><?= htmlentities($account['fname']) . ' ' . htmlentities($account['lname']) ?></td>
                <td><?= htmlentities($account['email']) ?></td>
                <td><?= htmlentities($account['phone']) ?></td>
                <td><?= htmlentities($account['address']) ?></td>
                <td><?= htmlentities($account['province']) ?></td>
                <td><span class="badge <?= ($account['role'] == 'customer') ? 'badge-warning' : 'badge-info' ?>"><?= $account['role'] ?></span>
                </td>
                <td>
                    <?php if ($account['status'] == 0) : ?>
                        <span class="badge badge-danger">Chặn</span>
                    <?php else : ?>

                        <span class="badge badge-success">Kích hoạt</span>
                    <?php endif; ?>
                </td>
                <td><?= $account['created_at'] ?></td>
                <td class="text-right">

                    <?php if ($account['role'] == 'customer') : ?>
                        <a href="./?module=admin&controller=account&action=edit&id=<?= $account['id'] ?>" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i>
                        </a>

                    <?php endif; ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr>

<?= $pagination ?>


<?php view('shared.admin.footer'); ?>