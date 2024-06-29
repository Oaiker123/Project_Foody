<script>
    const langEl = document.querySelector('.langWrap');
    const link = document.querySelectorAll('a');
    const timeEl = document.querySelector('.time');
    const homeEl = document.querySelector('.home');
    const productEl = document.querySelector('.product');
    const introduceEl = document.querySelector('.introduce');
    const newsEl = document.querySelector('.news');
    const contactEl = document.querySelector('.contact');

    const myCartEl = document.querySelector('.myCart');
    const forgotEl = document.querySelector('.forgot');
    const updateEl = document.querySelector('.update');
    const loginAdminEl = document.querySelector('.loginAdmin');
    const logOutEl = document.querySelector('.logOut');
    const usernameEl = document.querySelector('.username');
    const passwordEl = document.querySelector('.password');
    const rememberEl = document.querySelector('.remember');
    const registerEl = document.querySelector('.register');


    link.forEach(el => {
        el.addEventListener('click', () => {
            langEl.querySelector('.active').classList.remove('active');
            el.classList.add('active');
            const attr = el.getAttribute('language');

            homeEl.textContent = data[attr].home;
            timeEl.textContent = data[attr].time;
            productEl.textContent = data[attr].product;
            introduceEl.textContent = data[attr].introduce;
            newsEl.textContent = data[attr].news;
            contactEl.textContent = data[attr].contact;

            myCartEl.textContent = data[attr].myCart;
            forgotEl.textContent = data[attr].forgot;
            updateEl.textContent = data[attr].update;
            loginAdminEl.textContent = data[attr].loginAdmin;
            logOutEl.textContent = data[attr].logOut;
            usernameEl.textContent = data[attr].username;
            passwordEl.textContent = data[attr].password;
            rememberEl.textContent = data[attr].remember;
            registerEl.textContent = data[attr].register;
        });
    });

    var data = {
        "english": {
            "time" : "Operating hours: 09:00 - 22:00 every day"  ,
            "home": "Home",
            "product": "Product",
            "introduce": "Introduce",
            "news": "News",
            "contact": "Contact",
            "myCart": "> My Cart",
            "forgot":" > Forget Password",
            "update":"> Update account",
            "loginAdmin":"Login Admin",
            "logOut":"> Log Out",
            "username":"Username",
            "password":"Password",
            "remember":"Remember me",
            "register": "Create Account"
        },
        "vietnamese": {
            "time":"Thời gian hoạt động:  09:00 - 22:00 mỗi ngày",
            "home": " Trang chủ",
            "product": "Sản phẩm",
            "introduce": "Giới thiệu",
            "news": "Tin tức",
            "contact": "Liên hệ",

            "myCart": "> Đơn hàng của tôi",
            "forgot":"> Quên mật khẩu",
            "update":"> Cập nhật tài khoản",
            "loginAdmin":"> Đăng nhập admin",
            "logOut":"> Đăng Xuất",
            "username":"Tên đăng nhập",
            "password":"Mật khẩu",
            "remember":"Ghi nhớ tài khoản?",
            "register": "Đăng ký thành viên"
        },
    }

    const userEle = document.getElementById('user');
const emailEle = document.getElementById('email');
const phoneEle = document.getElementById('phone');

const btnRegister = document.getElementById('btn-register');
const inputEles = document.querySelectorAll('.input-row');

btnRegister.addEventListener('click', function () {
    Array.from(inputEles).map((ele) =>
        ele.classList.remove('success', 'error')
    );
    let isValid = checkValidate();

    if (isValid) {
        // alert('Gửi đăng ký thành công');
    }
});

function checkValidate() {
    let userValue = userEle.value;
    let emailValue = emailEle.value;
    let phoneValue = phoneEle.value;

    let isCheck = true;

    if (userValue == '') {
        setError(userEle, 'Tên không được để trống');
        isCheck = false;
    } else {
        setSuccess(userEle);
    }

    if (emailValue == '') {
        setError(emailEle, 'Email không được để trống');
        isCheck = false;
    } else if (!isEmail(emailValue)) {
        setError(emailEle, 'Email không đúng định dạng');
        isCheck = false;
    } else {
        setSuccess(emailEle);
    }

    if (phoneValue == '') {
        setError(phoneEle, 'Số điện thoại không được để trống');
        isCheck = false;
    } else if (!isPhone(phoneValue)) {
        setError(phoneEle, 'Số điện thoại không đúng định dạng');
        isCheck = false;
    } else {
        setSuccess(phoneEle);
    }


    return isCheck;
}

function setSuccess(ele) {
    ele.parentNode.classList.add('success');
}

function setError(ele, message) {
    let parentEle = ele.parentNode;
    parentEle.classList.add('error');
    parentEle.querySelector('small').innerText = message;
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        email
    );
}

function isPhone(number) {
    return /(84|0[3|5|7|8|9])+([0-9]{8})\b/.test(number);
}
</script>  
<style>
        .langWrap {
            margin-top: 15px;
            float: right;
            width: 10%;
            text-align: center;
        }

        .langWrap a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
            font-weight: 1vw;
            background: #555656;
            font-size: 18px;
            border-radius: 10px;
        }

        .langWrap a:focus {
            background: #f21313;
        }
    </style>   
    </div>  
    <footer class="clear">
        <div class="ft-top1a">
            <div class="ft-top1">
                <div>
                    <div>Tổng đài hỗ trợ</div>
                    <p>Hotline: 035.37.12.030</p>
                    <p>Fanpage : nhom15.org - Món gì cũng có</p>
                    <p>Zalo: 035.37.12.030</p>
                    <p>Địa chỉ: 124/49 Hòe Thị, Phương Canh, Nam Từ Niêm, Hà Nội</p>
                    <p>Email: tranbaoai2004@gmail.com</p>
                </div>
                <div>
                    <div>Chính Sách</div>
                    <p><a href="index.php?act=doitra">Chính sách đổi trả</a></p>
                    <p><a href="index.php?act=muahang">Chính sách mua hàng</a></p>
                    <p><a href="index.php?act=gioithieu">Giới thiệu cửa hàng</a></p>
                    <p><a href="index.php?act=lienhe">Liên hệ cửa hàng</a></p>
                </div>
                <div>
                    <div>Tổng đài hỗ trợ</div>
                    <p class="mb20">Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
                    <a class="aa" href="index.php?act=dangky">Đăng ký thành viên</a>
                </div>
            </div>
        </div>
        <div class="ft-top2a">
            <div class="ft-top2">
                <div>© Ăn gì cũng có | Vận hành bởi Nhóm 15 Lớp PRO1014</div>
                <div>
                    <a href="https://www.facebook.com/baoai.tran.89/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UC6iVBxdQG3jq1c89rET1gZg"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.tiktok.com/@oaiyeuthao"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <div>
            
            </div>
            
        </div>
    </footer>



    <!-- Script SlideShow  -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>
</html> 