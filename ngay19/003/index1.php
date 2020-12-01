<?php

/**
 * include_once
 * include ( bao gồm )
 * require ( đòi hỏi/ yêu cầu )
 * require_once
 * điểm chung của nó là 4 lênh này đều được sử dụng để nạp 1 file khác
 * vào file hiện tại
 *
 * điểm khách nhau :
 * include_once chỉ nạp 1 lần duy nhất cho dù được gọi nhiều
 * include nạp bao nhiều lần tương ứng với số lần nó được gọi
 * require_once nếu nạp file ko tồn tại thì bị lỗi dừng chương trình ngay
 * lập tức
 * inlude_once thì in ra lỗi nhưng chạy tiếp được khi inlude 1 file ko tồn tại
 */