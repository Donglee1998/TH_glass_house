@extends('admin.layouts.master')
@section('content')
    <table style="border-spacing: 10px;width: 100%" align="center">
        <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
            <td colspan="4">
                <a href="">Add Admin</a>
            </td>
        </tr>
        <tr class="header" style="text-align: center">
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Roles</td>
            <td>Actions</td>
        </tr>

            <tr style="text-align: center">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn btn-success"><a style="text-decoration: none" href="">Edit</a></button>
                    <button class="btn btn-danger"><a style="text-decoration: none" href="" class="delete">Delete</a></button>
                </td>
            </tr>
    </table>
@endsection
