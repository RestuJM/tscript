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
        <button type="button" class="btn btn-primary db"
            data-loading-text="<i class='fas fa-spinner fa-pulse'></i> Sedang Proses...">Create
            Database</button>
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
                        if (result == 0) {
                            toastr.success('Success create database.', "Information");
                            setTimeout(() => {
                                window.location = base_url;
                            }, 3000);
                        } else {
                            toastr.error('Error handler.', 'Information');
                            $('.db').attr('disabled', false);
                        }
                    },
                });
            });
        });
    </script>
@endsection
