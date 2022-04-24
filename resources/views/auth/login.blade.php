<x-guest-layout>
<div class="header">
    <div class="header_title">atte</div>
</div>

    <x-auth-card>
   <x-slot name="logo">
            <a href="/">
<p class="header_style">ログイン</p>
            </a>
</x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                
                <x-input id="email" class="block mt-1 w-full tesst" type="email" name="email" :value="old('email')" required autofocus placeholder="メールアドレス"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autofocus placeholder="パスワード"/>
            </div>


            <div class="block">
                <x-button class="block mt-4 register-text w-full">
                    {{ __('ログイン') }}
                </x-button>
</div>
            <div class="inner_login">
<p class="">アカウントをお持ちの方はこちら</p>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('会員登録') }}
                </a>
            </div>
        </form>
    </x-auth-card>
<div class="footer">
    <p class="footer_line">atte,inc.</p>
</div>
</x-guest-layout>