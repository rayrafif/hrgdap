<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Employee</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 24px; background: #f5f7fb; color: #222; }
        .card { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
        .topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; gap: 12px; }
        .btn { display: inline-block; padding: 10px 14px; border-radius: 8px; background: #2563eb; color: white; text-decoration: none; }
        .btn.secondary { background: #6b7280; }
        form.inline { display: flex; gap: 8px; }
        input[type="text"] { padding: 10px; border: 1px solid #d1d5db; border-radius: 8px; min-width: 260px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; font-size: 14px; }
        th, td { padding: 10px; border-bottom: 1px solid #e5e7eb; text-align: left; vertical-align: top; }
        th { background: #f8fafc; }
        .muted { color: #6b7280; }
        .alert { padding: 10px 12px; border-radius: 8px; margin-bottom: 12px; background: #dcfce7; color: #166534; }
    </style>
</head>
<body>
<div class="card">
    <div class="topbar">
        <h2>Data Employee</h2>
        <a class="btn" href="/admin/employees/create">Tambah Karyawan</a>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert"><?= esc(session()->getFlashdata('success')) ?></div>
    <?php endif; ?>

    <form method="get" class="inline">
        <input type="text" name="search" value="<?= esc($search ?? '') ?>" placeholder="Cari nama/jabatan/lokasi/email">
        <button class="btn secondary" type="submit">Cari</button>
        <a class="btn secondary" href="/admin/employees">Reset</a>
    </form>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Lokasi</th>
                <th>Status</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($employees)): ?>
                <?php foreach ($employees as $index => $employee): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($employee['full_name'] ?? '-') ?></td>
                        <td><?= esc($employee['current_designation'] ?? '-') ?></td>
                        <td><?= esc($employee['work_location'] ?? '-') ?></td>
                        <td><?= esc($employee['employment_status'] ?? '-') ?></td>
                        <td class="muted"><?= esc($employee['email'] ?? '-') ?></td>
                        <td>
                            <a href="/admin/employees/edit/<?= $employee['id'] ?>">Edit</a> |
                            <a href="/admin/employees/delete/<?= $employee['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7">Belum ada data employee.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
