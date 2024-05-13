@section('kalender-content')
    <section class="kalender">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">My Calendar</div>
                        <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#eventAdd">Add
                            Event</a>
                    </div>
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="eventAdd" role="dialog" data-dismiss="modal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content bg-light ">
                <div class="modal-header bg-gray">
                    <div class="card-title">Add Event</div>
                </div>
                <form id="addEventSubmit" type="post" target="#">
                    {{ csrf_field() }}
                    <div class="card-body text-black p-4">
                        <div class="row mb-3 pl-4 pr-4">
                            <div class="col-md-12">
                                <label for="title">Title</label>
                                <input id="title" type="text" name="title" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Date Range
                                            <input type="text" name="rangepick" class="form-control daterange" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="addvent" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
