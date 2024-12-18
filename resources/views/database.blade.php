@extends('layouts.login')

@section('css')
    <style>
        .loading-buttons {
            display: inline-flex;
            flex-direction: column;
            margin-top: 1em;

            button {
                border-color: darken(green, 10%);
                background: green;
                margin: .25em 1em;

                &:active,
                &:focus,
                &:hover,
                &.disabled {
                    background: darken(green, 10%) !important;
                    border-color: darken(green, 10%);
                }

                i.fa-file-word {
                    padding-right: .5em;
                }
            }
        }
    </style>
@endsection
@section('content')
    <div class="card-body text-center">
        <button type="button" class="btn btn-primary db">
            <i class="fas fa-database"></i>
            Create Database
        </button>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $(document).ready(function() {
            toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: true,
                progressBar: true,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "10000",
                hideDuration: "10000",
                timeOut: "10000",
                extendedTimeOut: "10000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
            $(".db").on("click", function() {
                $('.db').attr('disabled', true);
                $.ajax({
                    url: base_url + "/starter_pack",
                    method: "POST",
                    dataType: "Json",
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function(jqXHR, settings) {
                        return true;
                    },
                    success: function(result) {
                        console.log(result)
                        if (result == 0) {
                            toastr.success('Success create database.', "Information");
                            setTimeout(() => {
                                window.location = base_url;
                            }, 3000);
                        } else {
                            toastr.error('Error handler.<br> Please check your .env file<br> for '+"{{env('APP_VERSION')}}"+' database "pgsql" only, "mysql" in progress.', 'Information');
                            $('.db').attr('disabled', false);
                        }
                    },
                });
            });
        });
    </script>
@endsection
