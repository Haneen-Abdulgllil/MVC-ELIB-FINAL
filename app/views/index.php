
    <?php 
    require_once 'include/header.php';

    require_once 'include/navbar.php';

    require_once 'include/slider.php';
    ?>



                <!-- start pop up -->
                        <div class="container" id="model-container">
                        
                                <form action="" id="form">
                                        <button type="button" class="cancel" onclick="closeForm()">X</button>
                                    <h4>تسجيل الدخول</h4>
        
                                    <div class="input-control">
                                        <input id="email" name="email" type="text" placeholder="البريد الالكترون او رقم الجوال">
                                
                                    </div>
                                    <div class="input-control">
                                        <input id="password"name="password" type="password" placeholder="كلمة المرور" >
                                        <span><a href="">نسيت؟</a></span>
                                
                                    </div>
                                    <button type="submit">تسجيل الدخول</button>
                                    <p>ليس لديك حساب</p>
                                    <button type="submit" class="log-in" id="signup">انشاء حساب جديد</button>
                            
                                </form>
                        </div>
            
            
                    
                    <div class="container" id="model-container2">
                            
                            <form action="" id="form">
                                    <button type="button" class="cancel" onclick="closeForm()">X</button>
                                <h4>انشاء حساب</h4>
                    
                                <div class="input-control">
                                    <div class="phone-no">
                                            <input id="phone" name="phone" type="text" placeholder="رقم الجوال">
                                            <select id="no." name="no.">
                                                    <option value="volvo">+9667</option>
                                                    <option value="saab">+9667</option>
                                                    <option value="fiat">+9667</option>
                                                    <option value="audi">+9667</option>
                                            </select>
                                    </div>
                            
                                        <p>سوف نرسل لك رمز التحقق عن طريق رسالة نصية</p>
                                </div>
                                <div class="input-control">
                                    <input  type="button" placeholder="ارسال رمز التحقق">
                                </div>
                    

                    
                                <div class="input-control">
                                        <input id="username" name="username" type="text" placeholder="الاسم الاول">
                                
                                    </div>
                    
                                    <div class="input-control">
                                            <input id="username" name="username" type="text" placeholder="اسم العائلة">
                                    
                                    </div>
                    
                                    <div class="input-control">
                                                <input id="email" name="email" type="text" placeholder="البريد الالكتروني"> 
                                        
                                    </div> 
                    
                                    <div class="input-control">
                                                <input id="email" name="email" type="text" placeholder="تأكيد البريد الالكتروني">
                                        
                                    </div>
                                    <div class="input-control">
                                            <input id="password"name="password" type="password" placeholder="كلمة المرور">
                                    
                                    </div>
                            
                                        <div class="checkbox">
                                            <input type="checkbox" id="accept">
                                            <label> اوافق على الشروط والاحكام</label>
                    
                                    </div>
                                    <div class="checkbox">
                                        
                                        <input type="checkbox" id="reg" >
                                        <label> التسجيل للانضمام للنشرة الجوية</label>
                                
                    
                                    </div>
                            
                                
                                    <div class="input-control">
                                    
                        
                                        <input type="button" placeholder="انشاء حساب" >
                                    </div>
                                
                                <p>
                                    لديك حساب؟ <a href="#" id="sign-in" >تسجيل الدخول</a>
                                </p>
                        
                            </form>
                        </div>
                    
                    
                    <!-- end pop up -->
                
                <!-- start explore -->
                
                <div class="exlpore_container"></div>
        
                    <h2>تصفح حسب القسم </h2>
                    <div class="explore_content">

                    <?php foreach($params['categories']  as $category){?>
                        <div class="explore_card">
                            <div class="icon">
                                    <!-- <a href=""> <i class="fa fa-cart-plus" id="i1"></i></a> -->
                                    <img class="img-fluid rounded" height="50px" width="50px" src="images/<?= $category['image'];?>">
                            </div>
                            <h3>
                            <?= $category['name'];?>
                            </h3>
                        </div>
                            <?php } ?>
                    </div>
                </div>
                
                
                <!-- end explore -->
                <!-- start orders -->
                
                
                    <!-- first row -->
                
                <div class="order_container">
                    <div class="order_header">
                            <h2> العروض الحالية</h2>
                            <a href="category">عرض الكل</a>
                
                    </div>
                
                    <div class="order_content">
                        <a href="details">
                
                        <?php foreach($params['books'] as $book){?>
                                <div class="product_card">
                                        <div class="remain_timer">
                                                <span id="days"></span>
                                                days/<span id="hours"></span>
                                                h:<span id="minutes"></span>
                                                m:<span id="seconds"></span>s
                                        </div>
                                    <img src="images/<?= $book['image'];?>" alt="Denim Jeans">
                                    <h3><?= $book['title'];?> <i class="fa fa-book-reader"></i></h3>
                                                        <p class="price"><?= $book['price'];?></p>
                                    <h6>شامل الضريبة</h6>
                                    <h5>صيغ اخرى:كتب مطبوعة</h5>
                                    <div class="product_icons">
                                        <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                                        <a href="#" id="add" onclick="clickCounter()" ><img src="assets_elib/img/svg/svgexport-21.svg" alt=""></a>
                                        <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                
                        
                                    </div>
                        
                        
                        
                                </div>
                        </a>
                        <!-- <a href="details"> 
                        <div class="product_card">
                                <div class="remain_timer">
                                        <span id="days1"></span>
                                        days/<span id="hours1"></span>
                                        h:<span id="minutes1"></span>
                                        m:<span id="seconds1"></span>s
                                </div>
                            <img src="assets_elib/img/book.jpg" alt="Denim Jeans">
                            <h3>كتاب الكتروني<i class="fa fa-book-reader"></i></h3>
                            
                            <p class="price">$19.99</p>
                            <h6>شامل الضريبة</h6>
                            <h5>صيغ اخرى:كتب مطبوعة</h5>
                            <div class="product_icons">
                                <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                                <a href=""  onclick="clickCounter()" ><img src="assets_elib/img/svg/svgexport-21.svg" alt=""></a>
                                <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                
                
                            </div>
                
                
                
                        </div>
                        </a>
                
                
                        <a href="details">
                            <div class="product_card">
                                    <div class="remain_timer">
                                            <span id="days2"></span>
                                            days/<span id="hours2"></span>
                                            h:<span id="minutes2"></span>
                                            m:<span id="seconds2"></span>s
                                    </div>
                                <img src="assets_elib/img/book.jpg" alt="Denim Jeans">
                                <h3>كتاب الكتروني<i class="fa fa-book-reader"></i></h3>
                                
                                <p class="price">$19.99</p>
                                <h6>شامل الضريبة</h6>
                                <h5>صيغ اخرى:كتب مطبوعة</h5>
                                <div class="product_icons">
                                    <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                                    <a href=""  onclick="clickCounter()" ><img src="assets_elib/img/svg/svgexport-21.svg" alt=""></a>
                                    <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                
                
                                </div>
                
                
                
                            </div>
                </a>
                
                <a href="details">
                    <div class="product_card">
                            <div class="remain_timer">
                                    <span id="days3"></span>
                                    days/<span id="hours3"></span>
                                    h:<span id="minutes3"></span>
                                    m:<span id="seconds3"></span>s
                            </div>
                        <img src="assets_elib/img/book.jpg" alt="Denim Jeans">
                        <h3>كتاب الكتروني<i class="fa fa-book-reader"></i></h3>
                        
                        <p class="price">$19.99</p>
                        <h6>شامل الضريبة</h6>
                        <h5>صيغ اخرى:كتب مطبوعة</h5>
                        <div class="product_icons">
                            <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                            <a href=""  onclick="clickCounter()" ><img src="assets_elib/img/svg/svgexport-21.svg" alt=""></a>
                            <a href=""><img src="assets_elib/img/svg/svgexport-55.svg" alt=""></a>
                
                
                        </div>
                
                
                
                    </div>
                </a>
                
                    -->

                        <?php } ?>
                
                </div>
                
                
                </div>
            
            


    <?php 
    require_once 'include/footer.php';
    ?>
                

</body>
</html>