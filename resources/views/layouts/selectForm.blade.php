    <h3>choose actor</h3>
{{--    <select class="form-control" id="actor-select" name="actor-select"></select>--}}


{{--    <div class="input-group">--}}
{{--         <input type="text" autocomplete="off" name="search" id="search" class="form-control input-lg" placeholder="Enter Actor Name Here">--}}
{{--    </div>--}}
{{--    <div id="output"></div>--}}

    {{--        <option selected>Open this select menu</option>--}}
{{--        @foreach($actors as $actor)--}}
{{--        <option value="{{$actor->id}}">{{$actor->act_fname}} {{$actor->act_lname}}</option>--}}
{{--        @endforeach--}}

    <div class="container box">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search Actor Data" />
                </div>
                <div class="table-responsive">
                    <h3 align="center">Total Data : <span id="total_records"></span></h3>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
