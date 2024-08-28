{{--@extends('backend.layouts.master')--}}

{{--@section('content')--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 text-left">--}}
{{--                <h1 class="h5 mb-2 text-gray-800">Category List</h1>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 text-right mb-2">--}}
{{--                <a href="{{route('cat.add')}}" class="btn btn-primary">Add New</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card shadow mb-4">--}}
{{--            <div class="card-header py-3">--}}

{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>SL</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Details</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($categories as $key => $value)--}}
{{--                            <tr>--}}
{{--                                <th>{{$key+1}}</th>--}}
{{--                                <th>{{$value->category_name}}</th>--}}
{{--                                <th>{{$value->details}}</th>--}}
{{--                                <th>--}}
{{--                                    <a href="{{route('cat.edit', $value->id)}}" class="btn btn-warning">Edit</a>--}}
{{--                                    <a onclick="return confirm('Are you sure to delete?')" href="{{route('cat.delete', $value->id)}}" class="btn btn-danger">Delete</a>--}}
{{--                                </th>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--@endsection--}}





































{{--@extends('backend.layouts.master')--}}
{{--@section('content')--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.css" rel="stylesheet">--}}
{{--    <div class="container-fluid" id="viewBlock">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 text-left">--}}
{{--                <h1 class="h5 mb-2 text-gray-800">Category List</h1>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 text-right mb-2">--}}
{{--                <a @click="modalHideShow('addModal', 'show')" class="btn btn-success text-white">Add New</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card shadow mb-4">--}}
{{--            <div class="card-body">--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-bordered" width="100%" cellspacing="0">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>SL</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Details</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr v-for="(data, index) in datList" :key="data.id">--}}
{{--                            <th>@{{ index + 1 }}</th>--}}
{{--                            <th>@{{ data.category_name }}</th>--}}
{{--                            <th>@{{ data.details }}</th>--}}
{{--                            <th>--}}
{{--                                <a @click="openEditModal(data)" class="btn btn-warning">EDIT</a>--}}
{{--                                <a @click="deleteData(data)" class="btn btn-danger">DELETE</a>--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Add Modal -->--}}
{{--        <div class="modal" id="addModal">--}}
{{--            <div class="modal-dialog modal-lg">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h4 class="modal-title">Add Category</h4>--}}
{{--                        <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form @submit.prevent="submitAddForm(1)">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Category name</label>--}}
{{--                                <input v-model="addFormData.category_name" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Details</label>--}}
{{--                                <textarea class="form-control" v-model="addFormData.details"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <button type="submit" class="btn btn-success">Submit and close</button>--}}
{{--                                <button type="button" @click="submitAddForm(2)" class="btn btn-success">Submit and next</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-danger" @click="modalHideShow('addModal', 'hide')">Close</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Update Modal -->--}}
{{--        <div class="modal" id="updateModal">--}}
{{--            <div class="modal-dialog modal-lg">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h4 class="modal-title">Category Update</h4>--}}
{{--                        <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form @submit.prevent="submitUpdateForm">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Category name</label>--}}
{{--                                <input v-model="editFormData.category_name" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Details</label>--}}
{{--                                <textarea class="form-control" v-model="editFormData.details"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <button type="submit" class="btn btn-success">Submit</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-danger" @click="modalHideShow('updateModal', 'hide')">Close</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
{{--    <script>--}}
{{--        new Vue({--}}
{{--            el: '#viewBlock',--}}
{{--            data: {--}}
{{--                datList: [],--}}
{{--                addFormData: {},--}}
{{--                editFormData: {},--}}
{{--            },--}}
{{--            methods: {--}}
{{--                modalHideShow(modalId, status, callback = false) {--}}
{{--                    const _this = this;--}}
{{--                    _this.editFormData = {};--}}
{{--                    _this.addFormData = {};--}}
{{--                    $(`#${modalId}`).modal(status);--}}

{{--                    if (typeof callback === 'function') {--}}
{{--                        callback(true);--}}
{{--                    }--}}
{{--                },--}}
{{--                getDataList() {--}}
{{--                    const _this = this;--}}
{{--                    const url = `${baseUrl}/api/category_api`;--}}
{{--                    axios.get(url)--}}
{{--                        .then(function(response) {--}}
{{--                            if (parseInt(response.data.status) === 2000) {--}}
{{--                                _this.datList = response.data.result;--}}
{{--                            } else {--}}
{{--                                showToast(response.data.message);--}}
{{--                            }--}}
{{--                        })--}}
{{--                        .catch(function(error) {--}}
{{--                            console.log(error);--}}
{{--                        });--}}
{{--                },--}}
{{--                deleteData(data) {--}}
{{--                    const _this = this;--}}
{{--                    Swal.fire({--}}
{{--                        title: "Are you sure to delete?",--}}
{{--                        showDenyButton: true,--}}
{{--                        showCancelButton: true,--}}
{{--                        confirmButtonText: "OK",--}}
{{--                    }).then((result) => {--}}
{{--                        if (result.isConfirmed) {--}}
{{--                            const url = `${baseUrl}/api/category_api/${data.id}`;--}}
{{--                            axios.delete(url)--}}
{{--                                .then(function(response) {--}}
{{--                                    showToast(response.data.message);--}}
{{--                                    _this.getDataList();--}}
{{--                                })--}}
{{--                                .catch(function(error) {--}}
{{--                                    console.log(error);--}}
{{--                                });--}}
{{--                        }--}}
{{--                    });--}}
{{--                },--}}
{{--                openEditModal(data) {--}}
{{--                    const _this = this;--}}
{{--                    this.modalHideShow('updateModal', 'show', function() {--}}
{{--                        _this.editFormData = data;--}}
{{--                    });--}}
{{--                },--}}
{{--                submitUpdateForm() {--}}
{{--                    const _this = this;--}}
{{--                    const url = `${baseUrl}/api/category_api/${this.editFormData.id}`;--}}
{{--                    axios.put(url, this.editFormData)--}}
{{--                        .then(function(response) {--}}
{{--                            if (parseInt(response.data.status) === 2000) {--}}
{{--                                showToast(response.data.message);--}}
{{--                                _this.modalHideShow('updateModal', 'hide');--}}
{{--                                _this.getDataList();--}}
{{--                            } else {--}}
{{--                                console.log(response.data);--}}
{{--                            }--}}
{{--                        })--}}
{{--                        .catch(function(error) {--}}
{{--                            console.log(error);--}}
{{--                        });--}}
{{--                },--}}
{{--                submitAddForm(submitType) {--}}
{{--                    const _this = this;--}}
{{--                    axios.post(`${baseUrl}/api/category_api`, this.addFormData)--}}
{{--                        .then(function(response) {--}}
{{--                            if (parseInt(response.data.status) === 2000) {--}}
{{--                                showToast(response.data.message);--}}
{{--                                if (submitType === 1) {--}}
{{--                                    _this.modalHideShow('addModal', 'hide', function() {--}}
{{--                                        _this.getDataList();--}}
{{--                                    });--}}
{{--                                } else {--}}
{{--                                    _this.addFormData = {};--}}
{{--                                }--}}
{{--                            } else {--}}
{{--                                console.log(response.data);--}}
{{--                            }--}}
{{--                        })--}}
{{--                        .catch(function(error) {--}}
{{--                            console.log(error);--}}
{{--                        });--}}
{{--                },--}}
{{--            },--}}
{{--            mounted() {--}}
{{--                this.getDataList();--}}
{{--            },--}}
{{--        });--}}

{{--        function showToast(message) {--}}
{{--            $.toast({--}}
{{--                text: message,--}}
{{--                position: 'top-right',--}}
{{--                loaderBg: '#ff6849',--}}
{{--                icon: 'success',--}}
{{--                hideAfter: 3500,--}}
{{--                stack: 6--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}


{{--@endsection--}}


















@extends('backend.layouts.master')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.css" rel="stylesheet">
    <div class="container-fluid" id="viewBlock">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1 class="h5 mb-2 text-gray-800">Category List</h1>
            </div>
            <div class="col-md-6 text-right mb-2">
                <a @click="modalHideShow('addModal', 'show')" class="btn btn-success text-white">Add New</a>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(data, index) in datList" :key="data.id">
                            <th>@{{ index + 1 }}</th>
                            <th>@{{ data.category_name }}</th>
                            <th>@{{ data.details }}</th>
                            <th>
                                <a @click="openEditModal(data)" class="btn btn-warning">EDIT</a>
                                <a @click="deleteData(data)" class="btn btn-danger">DELETE</a>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Add Modal -->
        <div class="modal" id="addModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submitForm('add', 1)">
                            <div class="form-group">
                                <label>Category name</label>
                                <input v-model="addFormData.category_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea class="form-control" v-model="addFormData.details"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit and close</button>
                                <button type="button" @click="submitForm('add', 2)" class="btn btn-success">Submit and next</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" @click="modalHideShow('addModal', 'hide')">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update Modal -->
        <div class="modal" id="updateModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Category Update</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submitForm('update')">
                            <div class="form-group">
                                <label>Category name</label>
                                <input v-model="editFormData.category_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea class="form-control" v-model="editFormData.details"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" @click="modalHideShow('updateModal', 'hide')">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--    <script>--}}
{{--        new Vue({--}}
{{--            el: '#viewBlock',--}}
{{--            data: {--}}
{{--                datList: [],--}}
{{--                addFormData: {},--}}
{{--                editFormData: {},--}}
{{--            },--}}
{{--            methods: {--}}
{{--                modalHideShow(modalId, status, callback = false) {--}}
{{--                    const _this = this;--}}
{{--                    _this.editFormData = {};--}}
{{--                    _this.addFormData = {};--}}
{{--                    $(`#${modalId}`).modal(status);--}}

{{--                    if (typeof callback === 'function') {--}}
{{--                        callback(true);--}}
{{--                    }--}}
{{--                },--}}
{{--                getDataList() {--}}
{{--                    const _this = this;--}}
{{--                    const url = `${baseUrl}/api/category_api`;--}}
{{--                    axios.get(url)--}}
{{--                        .then(function(response) {--}}
{{--                            if (parseInt(response.data.status) === 2000) {--}}
{{--                                _this.datList = response.data.result;--}}
{{--                            } else {--}}
{{--                                showToast(response.data.message);--}}
{{--                            }--}}
{{--                        })--}}
{{--                        .catch(function(error) {--}}
{{--                            console.log(error);--}}
{{--                        });--}}
{{--                },--}}
{{--                deleteData(data) {--}}
{{--                    const _this = this;--}}
{{--                    Swal.fire({--}}
{{--                        title: "Are you sure to delete?",--}}
{{--                        showDenyButton: true,--}}
{{--                        showCancelButton: true,--}}
{{--                        confirmButtonText: "OK",--}}
{{--                    }).then((result) => {--}}
{{--                        if (result.isConfirmed) {--}}
{{--                            const url = `${baseUrl}/api/category_api/${data.id}`;--}}
{{--                            axios.delete(url)--}}
{{--                                .then(function(response) {--}}
{{--                                    showToast(response.data.message);--}}
{{--                                    _this.getDataList();--}}
{{--                                })--}}
{{--                                .catch(function(error) {--}}
{{--                                    console.log(error);--}}
{{--                                });--}}
{{--                        }--}}
{{--                    });--}}
{{--                },--}}
{{--                openEditModal(data) {--}}
{{--                    const _this = this;--}}
{{--                    this.modalHideShow('updateModal', 'show', function() {--}}
{{--                        _this.editFormData = data;--}}
{{--                    });--}}
{{--                },--}}
{{--                submitForm(type, submitType = null) {--}}
{{--                    const _this = this;--}}
{{--                    let url, formData;--}}

{{--                    if (type === 'add') {--}}
{{--                        url = `${baseUrl}/api/category_api`;--}}
{{--                        formData = this.addFormData;--}}
{{--                    } else {--}}
{{--                        url = `${baseUrl}/api/category_api/${this.editFormData.id}`;--}}
{{--                        formData = this.editFormData;--}}
{{--                    }--}}

{{--                    const method = type === 'add' ? 'post' : 'put';--}}

{{--                    axios[method](url, formData)--}}
{{--                        .then(function(response) {--}}
{{--                            if (parseInt(response.data.status) === 2000) {--}}
{{--                                showToast(response.data.message);--}}

{{--                                if (type === 'add' && submitType === 1) {--}}
{{--                                    _this.modalHideShow('addModal', 'hide', function() {--}}
{{--                                        _this.getDataList();--}}
{{--                                    });--}}
{{--                                } else if (type === 'add' && submitType === 2) {--}}
{{--                                    _this.addFormData = {};--}}
{{--                                } else if (type === 'update') {--}}
{{--                                    _this.modalHideShow('updateModal', 'hide');--}}
{{--                                    _this.getDataList();--}}
{{--                                }--}}
{{--                            } else {--}}
{{--                                console.log(response.data);--}}
{{--                            }--}}
{{--                        })--}}
{{--                        .catch(function(error) {--}}
{{--                            console.log(error);--}}
{{--                        });--}}
{{--                },--}}
{{--            },--}}
{{--            mounted() {--}}
{{--                this.getDataList();--}}
{{--            },--}}
{{--        });--}}

{{--        function showToast(message) {--}}
{{--            $.toast({--}}
{{--                text: message,--}}
{{--                position: 'top-right',--}}
{{--                loaderBg: '#ff6849',--}}
{{--                icon: 'success',--}}
{{--                hideAfter: 3500,--}}
{{--                stack: 6--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}



    <script>
        new Vue({
            el: '#viewBlock',
            data: {
                datList: [],
                addFormData: {},
                editFormData: {},
            },
            methods: {
                modalHideShow(modalId, status, callback = false) {
                    const _this = this;
                    _this.editFormData = {};
                    _this.addFormData = {};
                    $(`#${modalId}`).modal(status);

                    if (typeof callback === 'function') {
                        callback(true);
                    }
                },
                getDataList() {
                    const _this = this;
                    const url = `${baseUrl}/api/category_api`;
                    axios.get(url)
                        .then(function(response) {
                            if (parseInt(response.data.status) === 2000) {
                                _this.datList = response.data.result;
                            } else {
                                showToast(response.data.message);
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                },
                deleteData(data) {
                    const _this = this;
                    Swal.fire({
                        title: "Are you sure to delete?",
                        text: "This action cannot be undone!",
                        icon: 'warning',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "Cancel",
                        denyButtonText: "Don't delete",
                        buttonsStyling: true,
                        customClass: {
                            confirmButton: 'btn btn-danger',
                            cancelButton: 'btn btn-secondary',
                            denyButton: 'btn btn-info'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const url = `${baseUrl}/api/category_api/${data.id}`;
                            axios.delete(url)
                                .then(function(response) {
                                    showToast(response.data.message);
                                    _this.getDataList();
                                })
                                .catch(function(error) {
                                    console.log(error);
                                });
                        }
                    });
                },
                openEditModal(data) {
                    const _this = this;
                    this.modalHideShow('updateModal', 'show', function() {
                        _this.editFormData = data;
                    });
                },
                submitForm(type, submitType = null) {
                    const _this = this;
                    let url, formData;

                    if (type === 'add') {
                        url = `${baseUrl}/api/category_api`;
                        formData = this.addFormData;
                    } else {
                        url = `${baseUrl}/api/category_api/${this.editFormData.id}`;
                        formData = this.editFormData;
                    }

                    const method = type === 'add' ? 'post' : 'put';

                    axios[method](url, formData)
                        .then(function(response) {
                            if (parseInt(response.data.status) === 2000) {
                                showToast(response.data.message);

                                if (type === 'add' && submitType === 1) {
                                    _this.modalHideShow('addModal', 'hide', function() {
                                        _this.getDataList();
                                    });
                                } else if (type === 'add' && submitType === 2) {
                                    _this.addFormData = {};
                                } else if (type === 'update') {
                                    _this.modalHideShow('updateModal', 'hide');
                                    _this.getDataList();
                                }
                            } else {
                                console.log(response.data);
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                },
            },
            mounted() {
                this.getDataList();
            },
        });

        function showToast(message) {
            $.toast({
                heading: 'Notification',
                text: message,
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 4000,
                stack: 6,
                bgColor: '#28a745',
                textColor: 'white',
                showHideTransition: 'slide',
                allowToastClose: true,
            });
        }
    </script>

@endsection

