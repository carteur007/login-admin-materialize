<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ini_set('display_errors', 'on');
require __DIR__ . '/api.php';
$email = '';
$message = '';
$name = '';
$data = 'kk';
if (!empty($_REQUEST)) {
    if (!empty($_REQUEST['email']) && !empty($_REQUEST['message']) && !empty($_REQUEST['name'])) :
        $name = htmlspecialchars(base64_decode($_REQUEST['name']));
        $email = htmlspecialchars(base64_decode($_REQUEST['email']));
        $message = htmlspecialchars(base64_decode($_REQUEST['message']));
    endif;
}/*
if (!empty($email) || !(match_email(htmlspecialchars(base64_decode($_REQUEST['email']))))) :
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $message = "Erreur interne du serveur. reéssayez!";
    $data = http_build_query(["response_message" => $message]);
    $login = "../public/login.php?page=login&$data";
    redirect($uri, $login);
endif;
*/

include __DIR__ . '/page/adminnavbar.php';
?>
<!-- Section: Stats -->
<section class="section section-stats center">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons medium">insert_emoticon</i>
                <h5>Monthly Visitors</h5>
                <h3 class="count">283000</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width: 40%;"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel center">
                <i class="material-icons medium">mode_edit</i>
                <h5>Blog Posts</h5>
                <h3 class="count">105</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate blue" style="width: 20%;"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons medium">mode_comment</i>
                <h5>Comments</h5>
                <h3 class="count">1200</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width: 40%;"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel center">
                <i class="material-icons medium">supervisor_account</i>
                <h5>Users</h5>
                <h3 class="count">350</h3>
                <div class="progress grey lighten-1">
                    <div class="determinate blue lighten-1" style="width: 10%;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Visitor -->
<section class="section section-visitors blue lighten-4">
    <div class="row">
        <div class="col s12 m6 l8">
            <div class="card-panel">
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <!-- Latest Comments  -->
            <ul class="collection with-header latest-comments">
                <li class="collection-header">
                    <h5>Latest Comments</h5>
                </li>
                <li class="collection-item avatar">
                    <img src="img/person1.jpg" alt="" class="circle">
                    <span class="title">John Doe</span>
                    <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum veritatis dicta
                        voluptatem soluta, corporis impedit est similique culpa doloribus doloremque quasi repudiandae? Animi
                        dolorum nemo consequatur illo provident enim alias!</p>
                    <a href="" class="approve green-text">Approve</a>
                    <a href="" class="deny red-text">Deny</a>
                </li>
                <li class="collection-item avatar">
                    <img src="img/person2.jpg" alt="" class="circle">
                    <span class="title">Steve Smith</span>
                    <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum veritatis dicta
                        voluptatem soluta, corporis impedit est similique culpa doloribus doloremque quasi repudiandae? Animi
                        dolorum nemo consequatur illo provident enim alias!</p>
                    <a href="" class="approve green-text">Approve</a>
                    <a href="" class="deny red-text">Deny</a>
                </li>
                <li class="collection-item avatar">
                    <img src="img/person3.jpg" alt="" class="circle">
                    <span class="title">Ellen Williams</span>
                    <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum veritatis dicta
                        voluptatem soluta, corporis impedit est similique culpa doloribus doloremque quasi repudiandae? Animi
                        dolorum nemo consequatur illo provident enim alias!</p>
                    <a href="" class="approve green-text">Approve</a>
                    <a href="" class="deny red-text">Deny</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Section: Recent Posts & Todos -->
<section class="section section-recent">
    <div class="row">
        <div class="col s12 l8 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Recent Posts</span>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Post One</td>
                                <td>Web Development</td>
                                <td>
                                    <a href="details.html" class="btn blue lighten-2">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Post Two</td>
                                <td>Graphic Design</td>
                                <td>
                                    <a href="details.html" class="btn blue lighten-2">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Post Three</td>
                                <td>Web Development</td>
                                <td>
                                    <a href="details.html" class="btn blue lighten-2">Details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Quick Todos</span>
                    <form action="" id="todo-form">
                        <div class="input-field">
                            <input type="text" id="todo" placeholder="Add Todo...">
                        </div>
                    </form>
                    <ul class="collection todos">
                        <li class="collection-item">
                            <div>Todo One <a href="#" class="secondary-content delete">
                                    <i class="material-icons">close</i>
                                </a></div>
                        </li>
                        <li class="collection-item">
                            <div>Todo Two <a href="#" class="secondary-content delete">
                                    <i class="material-icons">close</i>
                                </a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/page/adminfooter.php';
?>