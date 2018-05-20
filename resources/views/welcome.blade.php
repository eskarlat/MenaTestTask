<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <style>
            .mb-10{
                margin-bottom:10px;
            }
        </style>
    </head>
    <body>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">SIMPLE NEWS API </h1>
            <p class="lead">Created with &#x1F496; by <strong>Evgeny Skarlat</p>
        </div>
    </div>
        <div class="container">
            <header>
                <div class="row">
                    <div class="col">
                        <h1>Documentation <span class="badge badge-secondary">1.0</span></h1>
                    </div>
                </div>
                <hr>
            </header>
            <section>
                <div class="row">
                    <div class="col-md-3">
                        <div class="menu-doc sticky-top">
                            <header>
                                <h2>Menu</h2>
                            </header>
                            <ul>
                                <li><a href="#getAllPost">Get all posts</a></li>
                                <li><a href="#getPost">Get post</a></li>
                                <li><a href="#createNewPost">Create new post</a></li>
                                <li><a href="#updatePost">Update post</a></li>
                                <li><a href="#deletePost">Delete post</a></li>
                                <li><a href="#sort">Sortable</a></li>
                                <li><a href="#filters">Filters</a></li>
                            </ul>
                            <small>⚡ <a href="https://github.com/eskarlat/MenaTestTask" target="_blank">@eskarlat</a> {{ date("Y") }} </small>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card border-light mb-10">
                            <div class="card-header"><a name="getAllPost">Get all posts</a></div>
                            <div class="card-body">
                                <code>GET /api/posts</code>
                                <p class="card-text">This method returns all post from datebase.</p>
                                <h5 class="card-title">Example answer</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <pre>{
  "status": "success",
  "data": [
    {
      "id": 1,
      "title": "Ut est molestiae excepturi consequatur.",
      "short_description": "Quaerat officia necessitatibus deserunt eum sed labore. Sunt minima sed repellendus quod dolores deleniti atque.",
      "text": "Voluptatibus ut consequuntur non alias quibusdam assumenda molestiae qui. Delectus aspernatur autem quaerat optio.",
      "created_at": "2016-09-20 22:33:42",
      "updated_at": "2018-05-20 12:49:34"
    },
    {
      "id": 2,
      "title": "Amet totam corporis molestiae sit.",
      "short_description": "In cumque ut iusto et. Voluptas et earum nisi eos qui vel. Voluptatum quod blanditiis facere officiis architecto neque.",
      "text": "Commodi voluptatem architecto explicabo hic omnis impedit expedita molestiae. Et quia commodi aut molestiae. Voluptatibus non consequatur dolores animi consequatur et. Rerum eum dignissimos illo.",
      "created_at": "2013-03-27 09:21:52",
      "updated_at": "2018-05-20 12:49:34"
    }
}</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-light mb-10">
                            <div class="card-header"><a name="getPost">Get post</a></div>
                            <div class="card-body">
                                <code>GET /api/posts/{id}</code>
                                <p class="card-text">This method returns definite post compare to id.</p>

                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Required</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>id</td>
                                        <td>integer</td>
                                        <td>yes</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h5 class="card-title">Example answer</h5>
                                <div class="card">
                                    <div class="card-body">
                                       <pre>
{
  "status": "success",
  "data": {
    "id": 1,
    "title": "Ut est molestiae excepturi consequatur.",
    "short_description": "Quaerat officia necessitatibus deserunt eum sed labore. Sunt minima sed repellendus quod dolores deleniti atque.",
    "text": "Voluptatibus ut consequuntur non alias quibusdam assumenda molestiae qui. Delectus aspernatur autem quaerat optio.",
    "created_at": "2016-09-20 22:33:42",
    "updated_at": "2018-05-20 12:49:34"
  }
}
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-light mb-10">
                            <div class="card-header"><a name="createNewPost">Create new post</a></div>
                            <div class="card-body">
                                <code>POST /api/posts</code>
                                <p class="card-text">This method returns definite post compare to id.</p>

                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Required</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>title</td>
                                        <td>string</td>
                                        <td>yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>short_description</td>
                                        <td>string</td>
                                        <td>yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>text</td>
                                        <td>string</td>
                                        <td>yes</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h5 class="card-title">Example request</h5>
                                <div class="card">
                                    <div class="card-body">
                                       <pre>
{
    "title": "STORE Ut est molestiae excepturi consequatur.",
    "short_description": "Quaerat officia necessitatibus deserunt eum sed labore. Sunt minima sed repellendus quod dolores deleniti atque.",
    "text": "Voluptatibus ut consequuntur non alias quibusdam assumenda molestiae qui. Delectus aspernatur autem quaerat optio."
}
</pre>
                                    </div>
                                </div>
                                <h5 class="card-title">Example answer</h5>
                                <div class="card">
                                    <div class="card-body">
                                       <pre>
{
    "status": "success",
    "data": {
        "id": 24,
        "title": "STORE Ut est molestiae excepturi consequatur.",
        "short_description": "Quaerat officia necessitatibus deserunt eum sed labore. Sunt minima sed repellendus quod dolores deleniti atque.",
        "text": "Voluptatibus ut consequuntur non alias quibusdam assumenda molestiae qui. Delectus aspernatur autem quaerat optio.",
        "created_at": "2018-05-20 18:30:02",
        "updated_at": "2018-05-20 18:35:00"
    }
}
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-light mb-10">
                            <div class="card-header"><a name="updatePost">Update post</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card border-light mb-10">
                            <div class="card-header"><a name="deletePost">Delete post</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card border-light mb-10">
                            <div class="card-header"><a name="sort">Sortable</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5 class="card-title">Request parameters</h5>
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Required</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card border-light mb-10">
                            <div class="card-header"><a name="filters">Filters</a></div>
                            <div class="card-body">
                                <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
       </body>
</html>
