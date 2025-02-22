@extends('layouts.sidebar')

@section('content')
<div class="w-75 m-auto">
  <div class="w-100">
    <p>{{ $calendar->getTitle() }}</p>
    <p>{!! $calendar->render() !!}</p>
  </div>
</div>

{{-- カレンダーのスクリプト --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 今日の日時を取得
        var today = new Date();
        today.setHours(0, 0, 0, 0);  // 今日の日付の0時0分にリセット

        // カレンダーの日付要素を取得
        var dates = document.querySelectorAll('.calendar-date');  // 日付要素に適したクラスを使う

        dates.forEach(function(date) {
            var dateValue = new Date(date.getAttribute('data-date'));  // data-date 属性に日付が格納されていると仮定

            // 今日より前の日付に past-date クラスを追加
            if (dateValue < today) {
                date.classList.add('past-date');  // past-date クラスを付与
            }
        });
    });
</script>

@endsection
