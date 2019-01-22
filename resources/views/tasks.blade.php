@extends('layouts.app')
@section('content')
    <div class='container'>
        <div class='col-sm-offset-2 col-sm-8'>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                新しいタスク
                </div>

                <div class='panel-body'>
                    <!-- validation errors -->
                    @include('common.errors')

                    <!-- task register -->
                    <form action="{{ url('task') }}" method='POST' class='form-horizontal'>
                        {{ csrf_field() }}

                        <!-- task name -->
                        <div class='form-group'>
                            <label for='task-name' class='col-sm3 control-label'>
                            タスク
                            </label>
                            <div class='col-sm-6'>
                                <input type='text' name='name' id='task-name' class='form-control'>
                            </div>
                        </div>

                        <!-- submit button -->
                        <div class='form-group'>
                            <div class='col-sm-offset-3 col-sm-6'>
                                <button type='submit' class='btn btn-default'>
                                    <i class='fa fa-btn fa-plus'>
                                    追加
                                    </i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
