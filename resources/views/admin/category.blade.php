<head>
    @include('admin.css')

    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 35px;
            padding-bottom: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .input_color {
            color: black;
        }

        #category_btn {
            padding: 12px;
            margin-left: 3px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')

        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{ url('add_category') }}" method="POST">
                        @csrf
                        <input type="text" class="input_color" name="categoryName" placeholder="Enter Category Name">
                        <input type="submit" class="btn btn-primary" name="submit" id="category_btn"
                            value="AddCategory">
                    </form>
                </div>
            </div>
        </div>
        </div>
        @include('admin.script')
</body>
