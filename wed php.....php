<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>

<h2>Top 5 trường đóng tiền nhiều</h2>
<p>CÁC TRƯỜNG ĐẠI HỌC TP.HCM:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Hutech')">Hutech</button>
  <button class="tablinks" onclick="openCity(event, 'Huflit')">Trường ĐH ngoại ngữ tin học</button>
  <button class="tablinks" onclick="openCity(event, 'FPT')">Đại học FPT </button>
  <button class="tablinks" onclick="openCity(event, 'HongBang')">ĐH Hồng Bàng</button>
  <button class="tablinks" onclick="openCity(event, 'Rmit')">ĐH Rmit </button>
</div>

<div id="Hutech" class="tabcontent">
  <h3>Hutech</h3>
  <p>Trường Đại học Công nghệ TP.HCM - HUTECH tiền thân là Trường Đại học Kỹ thuật Công nghệ TP.HCM, được thành lập ngày 26/4/1995 theo quyết định số 235/QĐ-TTg của Thủ tướng Chính phủ và đi vào hoạt động theo quyết định của Bộ trưởng Bộ GD&ĐT số 2128/QĐ-GDĐT.

Sau 25 năm xây dựng và phát triển, hiện HUTECH sở hữu 05 khu học xá toạ lạc tại TP. Hồ Chí Minh. Các khu học xá được đầu tư xây dựng khang trang, hiện đại theo chuẩn quốc tế với tổng diện tích trên 100.000m2 tạo không gian học tập hiện đại, năng động, thoải mái.</p>
</div>

<div id="Huflit" class="tabcontent">
  <h3>Trường ĐH ngoại ngữ tin học</h3>
  <p>Trường Đại học Dân lập Ngoại ngữ - Tin học TP. Hồ Chí Minh được thành lập ngày 26-10-1994 theo quyết định số 616/TTg của Thủ tướng Chính phủ. Tiền thân của Trường là Trường Ngoại ngữ và Tin học Sài Gòn (1992). Tại Quyết định số 1757/QĐ-TTg ngày 15-10-2015 của Thủ tướng Chính phủ cho phép chuyển đổi loại hình trường ĐH Ngoại ngữ - Tin học TP. Hồ Chí Minh từ loại hình trường ĐH dân lập sang loại hình trường ĐH tư thục.

  Gần 25 năm qua, bằng sự nỗ lực của tập thể sư phạm nhà trường, HUFLIT đã trở thành trường đại học ngoài công lập được xã hội đánh giá cao về chất lượng đào tạo. Trường đã thiết lập nhiều mối quan hệ quốc tế với các trường đại học trong khu vực và thế giới. Bên cạnh đó, Trường đã đóng góp tích cực, hiệu quả vào sự nghiệp xã hội hóa giáo dục, công cuộc xây dựng và phát triển kinh tế - văn hóa đất nước.</p> 
</div>

<div id="FPT" class="tabcontent">
  <h3>Đại học FPT</h3>
  <p>CAMPUS ĐẠI HỌC FPT - KIẾN TRÚC XANH ĐỘC ĐÁO
BẬC NHẤT TP HỒ CHÍ MINH
Không gian xanh trong lành, kích thích sinh viên học tập, khơi nguồn cảm hứng sáng tạo. Trường Đại học FPT tiên phong sử dụng công nghệ hiện đại trong giảng dạy và học tập. Các khu vực giải trí, tiện ích, thể thao tích hợp giúp sinh viên phát triển cá</p>
</div>

<div id="HongBang" class="tabcontent">
  <h3>Đại học Hồng Bàng </h3>
  <p>Trường Đại học quốc tế Hồng Bàng
-
 

THÔNG TIN TUYỂN SINH ĐẠI HỌC CHÍNH QUY NĂM 2021

*********

Tên trường: TRƯỜNG ĐẠI HỌC QUỐC TẾ HỒNG BÀNG

Ký hiệu: HIU



 

Năm học 2021-2022, Trường Đại học Quốc tế Hồng Bàng dự kiến sẽ có thêm nhiều ngành học mới, trong đó chú trọng đến những ngành mà xã hội đang có nhu cầu cao, đặc biệt là mở thêm 8 ngành mới thuộc khối ngành Sức khoẻ gồm: Y học cổ truyền (1), Kỹ thuật Hình Ảnh Y Học (2), Sức khỏe răng miệng (3), Hộ Sinh (4), Dinh Dưỡng (5), Chăm Sóc Bệnh Trẻ Em (6), Hoạt Động Trị Liệu (7), Quản Lý Bệnh Viện (8), Bất Động Sản (9),  Kỹ thuật y sinh (10) Công nghệ sinh học y dược (11), Tâm lý học (12), Quản trị sự kiện (13), Quan hệ công chúng (14), Giáo dục tiểu học (15), Quản lý giáo dục (16) nâng tổng số ngành học HIU đang đào tạo lên 68 ngành.

</p>
</div>

<div id="Rmit" class="tabcontent">
  <h3>Đại Học Rmit</h3>
  <p>Có vô vàn cơ hội để bạn tạo cho mình trải nghiệm phong phú, tuyệt vời và đầy ý nghĩa tại RMIT Việt Nam
Nhập học tại RMIT Việt Nam đồng nghĩa với việc bạn sẽ trở thành một phần cộng đồng của trường. Tại đây, chúng tôi chú trọng mang lại những trải nghiệm tốt nhất có thể cho các sinh viên trong thời gian học cũng như khi các bạn sẵn sàng đi làm. Cùng khám phá làm thế nào chúng tôi có thể giúp bạn phát triển và chuẩn bị cho cuộc sống và sự nghiệp tương lai qua các hoạt động dưới đây.
</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
  <?php 
  ?>
</body>
</html>
