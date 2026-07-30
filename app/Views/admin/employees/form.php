<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Employee</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 24px; background: #f5f7fb; color: #222; }
        .card { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); max-width: 1000px; }
        .grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
        label { display: block; margin-bottom: 6px; font-weight: 600; }
        input, select, textarea { width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; }
        .actions { margin-top: 16px; display: flex; gap: 10px; }
        .btn { display: inline-block; padding: 10px 14px; border-radius: 8px; background: #2563eb; color: white; text-decoration: none; border: 0; cursor: pointer; }
        .btn.secondary { background: #6b7280; }
        .full { grid-column: span 2; }
    </style>
</head>
<body>
<div class="card">
    <h2><?= isset($employee['id']) ? 'Edit Karyawan' : 'Tambah Karyawan' ?></h2>
    <form method="post" action="<?= isset($employee['id']) ? '/admin/employees/update/' . $employee['id'] : '/admin/employees/store' ?>">
        <div class="grid">
            <div><label>Excel No</label><input name="excel_no" value="<?= esc($employee['excel_no'] ?? '') ?>"></div>
            <div><label>Nama Lengkap</label><input name="full_name" value="<?= esc($employee['full_name'] ?? '') ?>" required></div>
            <div><label>Jabatan</label><input name="current_designation" value="<?= esc($employee['current_designation'] ?? '') ?>"></div>
            <div><label>Lokasi Kerja</label><input name="work_location" value="<?= esc($employee['work_location'] ?? '') ?>"></div>
            <div><label>Status Kepegawaian</label><input name="employment_status" value="<?= esc($employee['employment_status'] ?? '') ?>"></div>
            <div><label>Gender</label><input name="gender" value="<?= esc($employee['gender'] ?? '') ?>"></div>
            <div><label>Tempat Lahir</label><input name="place_of_birth" value="<?= esc($employee['place_of_birth'] ?? '') ?>"></div>
            <div><label>Tanggal Lahir</label><input name="date_of_birth" value="<?= esc($employee['date_of_birth'] ?? '') ?>"></div>
            <div><label>Usia</label><input name="age" value="<?= esc($employee['age'] ?? '') ?>"></div>
            <div><label>WhatsApp</label><input name="whatsapp_number" value="<?= esc($employee['whatsapp_number'] ?? '') ?>"></div>
            <div><label>Telepon</label><input name="phone_number" value="<?= esc($employee['phone_number'] ?? '') ?>"></div>
            <div><label>Emergency</label><input name="emergency_phone" value="<?= esc($employee['emergency_phone'] ?? '') ?>"></div>
            <div><label>Email</label><input name="email" value="<?= esc($employee['email'] ?? '') ?>"></div>
            <div class="full"><label>Alamat KTP</label><textarea name="id_card_address" rows="3"><?= esc($employee['id_card_address'] ?? '') ?></textarea></div>
            <div class="full"><label>Alamat Domisili</label><textarea name="domicile_address" rows="3"><?= esc($employee['domicile_address'] ?? '') ?></textarea></div>
            <div><label>No KTP</label><input name="id_card_number" value="<?= esc($employee['id_card_number'] ?? '') ?>"></div>
            <div><label>No NPWP</label><input name="tax_number" value="<?= esc($employee['tax_number'] ?? '') ?>"></div>
            <div><label>Nama Bank</label><input name="bank_name" value="<?= esc($employee['bank_name'] ?? '') ?>"></div>
            <div><label>Nama Rekening</label><input name="bank_account_name" value="<?= esc($employee['bank_account_name'] ?? '') ?>"></div>
            <div><label>No Rekening</label><input name="bank_account_number" value="<?= esc($employee['bank_account_number'] ?? '') ?>"></div>
            <div><label>Agama</label><input name="religion" value="<?= esc($employee['religion'] ?? '') ?>"></div>
            <div><label>Pendidikan Terakhir</label><input name="last_education" value="<?= esc($employee['last_education'] ?? '') ?>"></div>
            <div><label>Nama Universitas</label><input name="university_name" value="<?= esc($employee['university_name'] ?? '') ?>"></div>
            <div><label>Tahun Lulus</label><input name="graduation_year" value="<?= esc($employee['graduation_year'] ?? '') ?>"></div>
        </div>

        <div class="actions">
            <button class="btn" type="submit">Simpan</button>
            <a class="btn secondary" href="/admin/employees">Kembali</a>
        </div>
    </form>
</div>
</body>
</html>
