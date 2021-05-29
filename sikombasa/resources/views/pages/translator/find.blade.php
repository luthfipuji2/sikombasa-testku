@extends('layouts.translator.master')

@section('title', 'Find a Job')
@section('content')
<div class="card">
  <div class="card-header">
    Subtitle
  </div>
  <div class="card-body">
  <tr>
    <td>
        <h5 class="card-title">Ista Wiratama</h5>
        <p class="card-text">Deadline: 3 Days</p>
        <p class="card-text"><span class="badge badge-pill badge-success">Rp 10,000</span></p>
    </td>
    <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Go somewhere</button>
    </td>
 </tr>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection