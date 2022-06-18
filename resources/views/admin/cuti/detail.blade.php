@extends('layouts.admin')

@section('title', 'Detail Cuti Pegawai')

@section('content')
<nav class="navbar navbar-expand">
    <div class="container-fluid navbar-brand">DETAIL CUTI PEGAWAI</div>
</nav>
<div class="pb-3" align="right">
    <span class="badge bg-success">Approved</span>
    <span class="badge bg-warning">Not Approved</span>
    <span class="badge bg-danger">Rejected</span>
</div>
<div class="container-fluid p-3 border">
    <ul class="list-group">
        <li class="list-group-item">Nama Pegawai : <strong>Joko Warsito</strong></li>
        <li class="list-group-item">ID Pegawai : <strong>EMP001</strong></li>
        <li class="list-group-item">NIK : <strong>33116543217890</strong></li>
        <li class="list-group-item">Departemen : <strong>CEO</strong></li>
        <li class="list-group-item">Alamat : <strong>Jaten, Karanganyar</strong></li>
        <li class="list-group-item">Jenis Cuti : <strong>Cuti Di Luar Tanggungan Perusahaan</strong></li>
        <li class="list-group-item">Tanggal Pengajuan : <strong>23 Januari 2022</strong></li>
        <li class="list-group-item">Rentang Cuti : <strong>22/2/2022 - 2/3/2022</strong></li>
        <!-- <li class="list-group-item">Cuti Tersisa : <strong></strong></li> -->
    </ul>
    <div class="pt-3" align="right">
        <label class="btn btn-primary btn-sm" for="button"><i class="bi bi-download"></i> Surat Pengajuan</label>
    </div>
</div>
<div class="pt-3" align="right">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#approve-cuti">Approve</button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#reject-cuti">Reject</button>
</div>
<div>
    <a class="btn btn-secondary nav-menu" href="#admin.cuti.list" role="button">Back</a>
</div>
<div class="modal fade" id="approve-cuti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Approve</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Setujui Pengajuan Cuti?</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">YES</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="reject-cuti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reject</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Tolak Pengajuan Cuti?</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">YES</button>
        </div>
      </div>
    </div>
  </div>
@endsection
