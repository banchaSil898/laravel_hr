{{-- <div class="w-full max-w-[480px] h-[505px] bg-white p-8 rounded-2xl shadow-md">
    <div class="flex justify-center mb-6 space-x-2">
        <img src="{{ asset('images/logos/matichon.svg') }}" alt="โลโก้ 1" class="h-8">
        <img src="{{ asset('images/logos/khaosod.svg') }}" alt="โลโก้ 2" class="h-8">
        <img src="{{ asset('images/logos/ngandee.svg') }}" alt="โลโก้ 3" class="h-8">
    </div>
    <h2 class="text-xl font-bold text-red-600 text-center">เข้าสู่ระบบ</h2>
    <p class="text-center text-gray-600">สำหรับผู้ดูแลระบบ (Admin)<br>เพื่อจัดการระบบและการตั้งค่า</p>
    <form class="mt-6" wire:submit="login">
        <div class="mb-4">
            <x-input-label for="login" :value="__('login_name')" class="block text-gray-700 font-medium"/>
            <x-text-input wire:model="form.login" id="login" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" placeholder="ชื่อผู้ใช้หรืออีเมล์" type="text" name="login" required autofocus />
            <x-input-error :messages="$errors->get('form.login')" class="mt-2" />
        </div>
        <div class="mb-4 relative">
            <x-input-label for="password" :value="__('password')" class="block text-gray-700 font-medium"/>
            <x-text-input wire:model="form.password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400"
                            type="password"
                            name="password"
                            placeholder="รหัสผ่าน"
                            required />
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>
        <div class="flex items-center justify-between">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="mr-2 rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('remember_me') }}</span>
            </label>

            <a href="#" class="text-sm text-red-500 hover:underline">{{ __('forgotten_password') }}</a>
        </div>
        <x-primary-button class="w-full mt-6 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">
            {{ __('log_in') }}
        </x-primary-button>
    </form>
</div> --}}

    <div class="w-full max-w-[480px] h-[505px]">
        <div class="bg-white shadow-md p-12 rounded-s col-span-6">
            <div class="my-4">
                <div class="flex mb-2 space-x-2">
                    <img src="{{ asset('images/logos/matichon.svg') }}" alt="โลโก้ 1" class="h-[27px]">
                    <img src="{{ asset('images/logos/khaosod.svg') }}" alt="โลโก้ 2" class="h-[27px]">
                    <img src="{{ asset('images/logos/ngandee.svg') }}" alt="โลโก้ 3" class="h-[27px]">
                </div>
                <div class="flex-col justify-center items-start gap-1 flex my-4">
                    <div><span class="text-[#ed1c24] text-[26px] font-semibold font-['Noto Sans Thai']">เข้าสู่ระบบ </span></div>
                        <div><span class="text-black text-[26px] font-semibold font-['Noto Sans Thai']">สำหรับผู้ดูแลระบบ (Admin)</span></div>
                    <div class="text-black text-xm font-normal font-['Noto Sans Thai']">เพื่อจัดการระบบและการตั้งค่า</div>
                </div>
            </div>
            <div class="py-4">
                <form action="#">
                    <div class="mb-4">
                        <x-input-label for="login" :value="__('login_name')" class="block text-gray-700 font-medium"/>
                        <x-text-input wire:model="form.login" id="login" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" placeholder="ชื่อผู้ใช้หรืออีเมล์" type="text" name="login" required autofocus />
                        <x-input-error :messages="$errors->get('form.login')" class="mt-2" />
                    </div>
                    <div class="mb-4 relative">
                        <x-input-label for="password" :value="__('password')" class="block text-gray-700 font-medium"/>
                        <x-text-input wire:model="form.password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400"
                                        type="password"
                                        name="password"
                                        placeholder="รหัสผ่าน"
                                        required />
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-between">
                        <label for="remember" class="inline-flex items-center">
                            <input wire:model="form.remember" id="remember" type="checkbox" class="mr-2 rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('remember_me') }}</span>
                        </label>
            
                        <a href="#" class="text-sm text-red-500 hover:underline">{{ __('forgotten_password') }}</a>
                    </div>
                    <x-primary-button class="w-full mt-6 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">
                        {{ __('log_in') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>