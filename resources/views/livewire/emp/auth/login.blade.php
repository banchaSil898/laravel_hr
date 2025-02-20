<form wire:submit="login">
    <!-- Login Field (รองรับทั้ง email และ username) -->
    <div>
        <x-input-label for="login" :value="__('Email or Username')" />
        <x-text-input wire:model="form.login" id="login" class="block mt-1 w-full" type="text" name="login" required autofocus />
        <x-input-error :messages="$errors->get('form.login')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required />
        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember" class="inline-flex items-center">
            <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ml-3">
            {{ __('Log in') }}
        </x-primary-button>
    </div>
</form>