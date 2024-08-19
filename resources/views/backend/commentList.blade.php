
@extends('backend.layouts.master')

@section('header')
    <link href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid" id="viewBlock">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1 class="h5 mb-2 text-gray-800">Comment List</h1>
            </div>

        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Optional: Add content here -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>User Name</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(data, index) in datList">
                            <th>@{{ index+1 }}</th>
                            <th>
                                <span v-if="data.visitor != null">
                                    @{{ data.visitor.name }}
                                </span>
                            </th>
                            <th v-text="data.comment"></th>
                            <th>
                                <a @click="deleteComment(data)" class="btn btn-danger">
                                    Delete
                                </a>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Including necessary scripts -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var app = new Vue({
            el: '#viewBlock',
            data: {
                message: 'Hello Vue!',
                datList: [],  // Corrected from {} to [] to match usage in v-for
                formData: {
                    name: '',
                    category_id: '',
                }
            },
            watch: {
                'formData.name': function (oldVal, newVal) {
                    console.log(this.formData.name);
                }
            },
            mounted() {
                this.getDataList();
            },
            methods: {
                getDataList() {
                    const _this = this;
                    var url = `${baseUrl}/api/comments_data`;

                    axios.get(url)
                        .then(function (response) {
                            _this.datList = response.data.result;
                        })
                        .catch(function (error) {
                            console.error(error);
                            _this.showToast('Error fetching data', 'red');
                        });
                },
                deleteComment(data) {
                    const _this = this;
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6', // Primary button color
                        cancelButtonColor: '#d33', // Cancel button color
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var url = `${baseUrl}/api/comments_data/delete`;

                            axios.post(url, { id: data.id }) // Send ID for deletion
                                .then(function (response) {
                                    _this.showToast(response.data.message, 'green');

                                    // Show SweetAlert success message
                                    Swal.fire({
                                        title: 'Deleted!',
                                        text: response.data.message,
                                        icon: 'success',
                                        confirmButtonColor: '#3085d6',
                                    });

                                    _this.getDataList();
                                })
                                .catch(function (error) {
                                    console.error(error);
                                    _this.showToast('Error deleting data', 'red');

                                    // Show SweetAlert error message
                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'There was an issue deleting the comment.',
                                        icon: 'error',
                                        confirmButtonColor: '#3085d6',
                                    });
                                });
                        }
                    });
                },
                showToast(message, bgColor = 'green') {
                    $.toast({
                        text: message,
                        bgColor: bgColor,
                        textColor: 'white',
                        position: 'top-right',
                        loaderBg: '#ff6849', // Adding a loader background color
                        icon: 'info', // You can change this to 'error', 'warning', or 'success'
                        hideAfter: 3000, // Auto-hide the toast after 3 seconds
                        stack: 5, // Allow up to 5 toasts at once
                        showHideTransition: 'fade', // Adds a fade effect to the toast
                        allowToastClose: true, // Enables the option to close the toast by clicking on it
                    });
                }
            }
        });
    </script>


@endsection




















{{--@extends('backend.layouts.master')--}}

{{--@section('header')--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.css" rel="stylesheet">--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <div class="container-fluid" id="viewBlock">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 text-left">--}}
{{--                <h1 class="h5 mb-2 text-gray-800">Comment List</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card shadow mb-4">--}}
{{--            <div class="card-header py-3">--}}
{{--                <!-- Optional: Add content here -->--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>SL</th>--}}
{{--                            <th>User Name</th>--}}
{{--                            <th>Comments</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr v-for="(data, index) in datList">--}}
{{--                            <th>@{{ index+1 }}</th>--}}
{{--                            <th>--}}
{{--                                <span v-if="data.visitor != null">--}}
{{--                                    @{{ data.visitor.name }}--}}
{{--                                </span>--}}
{{--                            </th>--}}
{{--                            <th v-text="data.comment"></th>--}}
{{--                            <th>--}}
{{--                                <a @click="deleteComment(data)" class="btn btn-danger">--}}
{{--                                    Delete--}}
{{--                                </a>--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--    <!-- Including necessary scripts -->--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}

{{--    <script>--}}
{{--        var app = new Vue({--}}
{{--            el: '#viewBlock',--}}
{{--            data: {--}}
{{--                message: 'Hello Vue!',--}}
{{--                datList: [],  // Corrected from {} to [] to match usage in v-for--}}
{{--                formData: {--}}
{{--                    name: '',--}}
{{--                    category_id: '',--}}
{{--                }--}}
{{--            },--}}
{{--            watch: {--}}
{{--                'formData.name': function (oldVal, newVal) {--}}
{{--                    console.log(this.formData.name);--}}
{{--                }--}}
{{--            },--}}
{{--            mounted() {--}}
{{--                this.getDataList();--}}
{{--            },--}}
{{--            methods: {--}}
{{--                getDataList() {--}}
{{--                    const _this = this;--}}
{{--                    var url = `${baseUrl}/api/comments_data`;--}}

{{--                    axios.get(url)--}}
{{--                        .then(function (response) {--}}
{{--                            _this.datList = response.data.result;--}}
{{--                        })--}}
{{--                        .catch(function (error) {--}}
{{--                            console.error(error);--}}
{{--                            _this.showToast('Error fetching data', 'red');--}}
{{--                        });--}}
{{--                },--}}
{{--                deleteComment(data) {--}}
{{--                    const _this = this;--}}
{{--                    Swal.fire({--}}
{{--                        title: "Are you sure you want to delete this comment?",--}}
{{--                        icon: 'warning',--}}
{{--                        showDenyButton: true,--}}
{{--                        showCancelButton: true,--}}
{{--                        confirmButtonText: "Delete",--}}
{{--                        denyButtonText: "Cancel",--}}
{{--                        reverseButtons: true,--}}
{{--                    }).then((result) => {--}}
{{--                        if (result.isConfirmed) {--}}
{{--                            var url = `${baseUrl}/api/comments_data/delete`;--}}

{{--                            axios.post(url, { id: data.id }) // Send ID for deletion--}}
{{--                                .then(function (response) {--}}
{{--                                    _this.showToast(response.data.message, 'green');--}}
{{--                                    _this.getDataList(); // Refresh the list--}}
{{--                                    Swal.fire({--}}
{{--                                        title: 'Deleted!',--}}
{{--                                        text: 'The comment has been deleted successfully.',--}}
{{--                                        icon: 'success',--}}
{{--                                        confirmButtonText: 'OK',--}}
{{--                                        confirmButtonColor: '#3085d6',--}}
{{--                                        timer: 3000 // Auto close after 3 seconds--}}
{{--                                    });--}}
{{--                                })--}}
{{--                                .catch(function (error) {--}}
{{--                                    console.error(error);--}}
{{--                                    _this.showToast('Error deleting data', 'red');--}}
{{--                                    Swal.fire({--}}
{{--                                        title: 'Error!',--}}
{{--                                        text: 'There was an issue deleting the comment.',--}}
{{--                                        icon: 'error',--}}
{{--                                        confirmButtonText: 'OK',--}}
{{--                                        confirmButtonColor: '#d33',--}}
{{--                                        timer: 3000 // Auto close after 3 seconds--}}
{{--                                    });--}}
{{--                                });--}}
{{--                        }--}}
{{--                    });--}}
{{--                },--}}
{{--                showToast(message, bgColor = 'green') {--}}
{{--                    $.toast({--}}
{{--                        text: message,--}}
{{--                        bgColor: bgColor,--}}
{{--                        textColor: 'white',--}}
{{--                        position: 'top-right',--}}
{{--                        icon: bgColor === 'green' ? 'success' : 'error', // Set icon based on background color--}}
{{--                        loader: true, // Show loading bar--}}
{{--                        loaderBg: '#333', // Loading bar color--}}
{{--                        showHideTransition: 'slide', // Transition for showing/hiding--}}
{{--                        hideAfter: 3000 // Auto hide after 3 seconds--}}
{{--                    });--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}



{{--@endsection--}}


























































