<x-guest-layout>
<div class="header">
    <div class="header_title">atte</div>
</div>


   <x-slot name="logo">
            <a href="/">
<p class="header_style">福場凛太郎さんお疲れ様です</p>
            </a>
</x-slot>
<div class="outer_button">
        <!-- 打刻ボタン -->
  
      <div class="inner_grid">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="GET" action="{{ route('startAttendance') }}">
            @csrf

            <div class="inline-block box01">
                <x-button class="bottom-text">
                    {{ __('勤務開始') }}
                </x-button>
            </div>
        </form>

        <form method="GET" action="{{ route('login') }}">
            <div class="inline-block box02">
                <x-button class="bottom-text">
                    {{ __('勤務終了') }}
                </x-button>
            </div>
</form>



        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="GET" action="{{ route('startAttendance') }}">
            @csrf
            <div class="inline-block box03">
                <x-button class="bottom-text">
                    {{ __('休憩開始') }}
                </x-button>
            </div>
</form>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="GET" action="{{ route('startAttendance') }}">
            <div class="inline-block box04">
                <x-button class="bottom-text">
                    {{ __('休憩終了') }}
                </x-button>
            </div>
</form>

</div><!-- inner_grid -->
</div><!-- outer_button -->
<div class="footer">
    <p class="footer_line">atte,inc.</p>
</div>
</x-guest-layout>