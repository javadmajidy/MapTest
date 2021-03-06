<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        مدیریت تاکسی ها
    </title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/JQuery.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcX1uYhD1YReWktFfWGkY4gXCWARrL4lE"></script>
    <script src="js/script.js"></script>
    <script src="js/googleMapJs.js"></script>
    <script src="js/getCurrentLoc.js"></script>
</head>
<body>
<div class="contentContainer">
    <div id="map133" class="mapHolder"></div>

    <div class="RightPanelContainer">
        <div class="sectionQueueContainer">
            <div class="sectionQueueTopAreaContainer">
                <span class="sectionHalfWidth">
                <span class="JMapLabel">
                    انتخاب ناحیه:
                </span>
                <span class="select-style">
                 <select>
            <option value="1">
                1
            </option>
            <option value="2">
                2
            </option>
            <option value="3">
                3
            </option>
            <option value="4">
                4
            </option>
        </select>
                </span>
            </span>
                <span class="sectionHalfWidth">
                <span class="JMapLabel">
                    تعداد در صف نوبت:
                </span>
                <div class="queueNumberText">
2
                </div>
            </span>
            </div>
            <div class="sectionQueueTableContainer">
                <div class="sectionQueueTableScrollContainer">
                    <!--TABLE STARTS-->
                    <table class="table-fill">
                        <thead>
                        <tr>
                            <th class="text-center">کد ماشین</th>
                            <th class="text-center">نام</th>
                            <th class="text-center">تلفن</th>
                            <th class="text-center">ماشین</th>
                            <th class="text-center">وضعیت</th>
                            <th class="text-center">نوبت</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                            <td class="text-center">12548</td>
                            <td class="text-center">حسن مرادی</td>
                            <td class="text-center">09123456789</td>
                            <td class="text-center">پژو 405 GLX</td>
                            <td class="text-center">منتظر</td>
                            <td class="text-center">1</td>
                        </tr>
                        <tr>
                            <td class="text-center">17391</td>
                            <td class="text-center">امین شهبازی</td>
                            <td class="text-center">09129876543</td>
                            <td class="text-center">سمند</td>
                            <td class="text-center">منتظر</td>
                            <td class="text-center">2</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--TABLE ENDS-->
                </div>
            </div>
        </div>
        <div class="AddressContainer">
            <div class="JMapLabel">
                آدرس:
            </div>
            <input type="text" class="JMapAddress">
            <button>
                <span>
                        ثبت آدرس
                </span>
            </button>
        </div>
        <div class="sectionAddressShowButtonContainer">
            <div class="center">
                <span class="JMapLabel">
                    نوع نمایش نقشه:
                </span>
                <span class="select-style">
                    <select>
                    <option value="ROADMAP">
                        جاده
                    </option>
                    <option value="SATELLITE">
                        ماهواره
                    </option>
                    <option value="HYBRID">
                        ترکیبی
                    </option>
                    <option value="TERRAIN">
                        عوارض
                    </option>
                </select>
                </span>
                <button>
                <span>
                        نمایش نقشه
                </span>
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 1/4/2017
 * Time: 9:01 PM
 */