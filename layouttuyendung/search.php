<div style="display: flex; align-items:center; ">
                    <nav class="navbar navbar-light bg-light" style="width:400px;">
                        <form class="form-inline" style="width: 100%; font-size: 1.6rem;" >
                          <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm tên, email, số điện thoại" style="width: 80%; padding: 4px; font-size: 1.4rem;" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                        </form>
                      </nav>
                      <div >
                          <select name="drinks" style="padding: 4px; font-size: 1.4rem; margin: 0 10px;"     required>
                            <option value="" disabled selected hidden >Chọn chiến dịch tuyển dụng</option>
                            <option value="Tuyển dụng nhân viên">Tuyển dụng nhân viên</option>
                            <option value="Tuyển dụng nhân viên">Tuyển dụng nhân viên</option>
                            <option value="Tuyển dụng nhân viên">Tuyển dụng nhân viên</option>
                          </select>

                          <select name="drinks" style="padding: 4px; font-size: 1.4rem; margin: 0 10px;"     required>
                            <option value="" disabled selected hidden >Nhập trạng thái CV</option>
                            <option value="CV tiếp nhận">CV tiếp nhận</option>
                            <option value="Phù hợp">Phù hợp</option>
                            <option value="Hẹn phỏng vấn">Hẹn phỏng vấn</option>
                            <option value="Gửi đề nghị">Gửi đề nghị</option>
                            <option value="Nhận việc">Nhận việc</option>
                            <option value="Từ chối">Từ chối</option>
                          </select>

                          <select name="drinks" style="padding: 4px; font-size: 1.4rem; margin: 0 10px;"     required>
                            <option value="" disabled selected hidden >Nhập nguồn CV</option>
                            <option value="Ứng tuyển">Ứng tuyển</option>
                            <option value="Tìm CV">Tìm CV</option>
                            <option value="TOPCV hỗ trợ">TOPCV hỗ trợ</option>
                            <option value="Việc làm siêu tốc">Việc làm siêu tốc</option>
                            <option value="Scout AI">Scout AI</option>
                            <option value="Khác">Khác</option>
                          </select>
                      </div>
                      <div class="">
                        <a style="margin-left: 5px;font-size: 18px;text-decoration: none;background-color:lightgreen;color:black ;" href="<?php echo $base_url?>/trangthaicv/phongvancv.php">Phỏng vấn</a>
                        <a style="margin-left: 5px;font-size: 18px;text-decoration: none;background-color:gray;color:black ;" href="<?php echo $base_url?>/trangthaicv/xemsaucv.php">Xem sau</a>
                        <a style="margin-left: 5px;font-size: 18px;text-decoration: none;background-color:red;color:black ;" href="<?php echo $base_url?>/trangthaicv/tuchoicv.php">Từ chối</a>
                      </div>
                </div>