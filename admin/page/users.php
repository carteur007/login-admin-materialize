<?php
include __DIR__ . '/adminnavbar.php';
?>
<!-- Section: Users -->
<section class="section section-users grey lighten-4">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Users</span>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="70">
                                        <img src="../img/person1.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left: 10px;">
                                    </td>
                                    <td>John Doe</td>
                                    <td>jdoe@gmail.com</td>
                                    <td>Jan, 1 2018</td>
                                    <td><a href="details.php?page=details" class="btn blue lighten-2">Details</a></td>
                                </tr>
                                <tr>
                                    <td width="70">
                                        <img src="../img/person2.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left: 10px;">
                                    </td>
                                    <td>Larry Watters</td>
                                    <td>lwatters@gmail.com</td>
                                    <td>Jan, 3 2018</td>
                                    <td><a href="details.php?page=details" class="btn blue lighten-2">Details</a></td>
                                </tr>
                                <tr>
                                    <td width="70">
                                        <img src="../img/person3.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left: 10px;">
                                    </td>
                                    <td>Susan Williams</td>
                                    <td>Susan@gmail.com</td>
                                    <td>Jan, 5 2018</td>
                                    <td><a href="details.php?page=details" class="btn blue lighten-2">Details</a></td>
                                </tr>
                                <tr>
                                    <td width="70">
                                        <img src="../img/person4.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left: 10px;">
                                    </td>
                                    <td>Jeff Burke</td>
                                    <td>jburke@gmail.com</td>
                                    <td>Jan, 10 2018</td>
                                    <td><a href="details.php?page=details" class="btn blue lighten-2">Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action">
                        <ul class="pagination">
                            <li class="disabled">
                                <a href="#!" class="blue-text">
                                    <i class="material-icons">chevron_left</i>
                                </a>
                            </li>
                            <li class="active blue lighten-2">
                                <a href="#!" class="white-text">1</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!" class="blue-text">2</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!" class="blue-text">3</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!" class="blue-text">4</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!" class="blue-text">5</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!" class="blue-text">
                                    <i class="material-icons">chevron_right</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/adminfooter.php';
?>