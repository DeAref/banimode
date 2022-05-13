<?php

$url = "https://mobapi.banimode.com/api/ramadan1401/send_score";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: */*",
   "Accept-Language: en-US,en;q=0.9,fa;q=0.8",
   "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI4N2Y5MjFmMTU4ZGZkOTEyMjEwY2FjMGU3MjI0YjFkNWVmNTJlYjFiMTJhMjMyMDgzZDQ2NTVlZWUwNTQ0MDBlMDlkZjNkNTFhZDVlMjIyIn0.eyJhdWQiOiIxIiwianRpIjoiYjg3ZjkyMWYxNThkZmQ5MTIyMTBjYWMwZTcyMjRiMWQ1ZWY1MmViMWIxMmEyMzIwODNkNDY1NWVlZTA1NDQwMGUwOWRmM2Q1MWFkNWUyMjIiLCJpYXQiOjE2NTI0MjcwMDksIm5iZiI6MTY1MjQyNzAwOSwiZXhwIjoxNjgzOTYzMDA5LCJzdWIiOiIxOTI3MDQwIiwic2NvcGVzIjp7InBsYWNlLW9yZGVycyI6MX19.dvy2bsKY7nYgU_1p4i5h2npodujEyRdrLyEKfTbP4q-pLXuHN8k5zr_dKPmeiUBvP-fqmTq8jYOr523P0xbTL3DiVVuGAJZPP-b2EuQxzAz_ayVgFYobVEhQg0rL1bxUn4gGyLmHOzDLUyg3JcwvfDv9jl20FqB96DYo1GC6eniCbmH413ARhLvA6z08aex-cpYy3Km9z0I0VfT9knR20U__Q9WJJtOqEaPlHe7hFr1_M5bCvkmRFpEmxip0Y6jPP_8ErDhSelWIT1kKEq7hpmAWQviBQZR5aEbv1jomss2MokMH7SEWZvAefRGkiaXpohAdfgKB6dJMkoeB_mlVeaiNsIQNm8DPch39Rtflj9lhrf53RxUj7-_dC_VPZWd_4djtPhGYUVo_pPtYYQd-Wb4-bAP0xeKPnJm4h8u36QgsvN9usFIhJyeDaRsyMOP9gD9A3R4CQhSVcxI8UO5NC_wo3Ptkh5VwPRtoXhl1BA9dLAghqCPT2ysWv4DfQm4Lt23evC1VtDpHxNtFQLbuIdFHQF6rqRuvXFXlbNoi1qdspLbOW0cLfbeZDeFPIQK6sc2QZ85DMx-ABaSVHkQbM4YnN4KJiyjQXia6E6NXcZCHjx-xTFGSimUoUOWab6g5WjmQaerwiMH2nmwfd9hjbejEhJqncv-eeyvMU91auos",
   "Connection: keep-alive",
   "Content-Type: application/json",
   "Origin: https://www.banimode.com",
   "Referer: https://www.banimode.com/",
   "Sec-Fetch-Dest: empty",
   "Sec-Fetch-Mode: cors",
   "Sec-Fetch-Site: same-site",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36",
   "sec-ch-ua:  Not A,Brand v=99", "Chromium v=101", "Google Chrome v=101",
   "sec-ch-ua-mobile: ?0",
   "sec-ch-ua-platform: Windows",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

