<x-auth-head regForm>
    <form action="/auth/register" method="POST" class="xs:min-w-[40rem] min-w-0 xs:w-1/2 w-full px-2 mb-6">
        @csrf
        <div class="grid grid-cols-2 gap-8">
            <div>
                <div>
                    <div class="flex justify-between">
                        <label for="ettehadieh"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">اتحادیه</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="ettehadieh" id="ettehadieh" value="{{ old('ettehadieh') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('ettehadieh')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="f_name"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">نام</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="f_name" id="f_name" value="{{ old('f_name') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('f_name')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="l_name"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">نام
                            خانوادگی و پسوند</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="l_name" id="l_name" value="{{ old('l_name') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('l_name')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="fa_name"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">نام
                            پدر</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="fa_name" id="fa_name" value="{{ old('fa_name') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('fa_name')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="id_code"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">کد
                            ملی(به انگلیسی)</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="id_code" id="id_code" value="{{ old('id_code') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('id_code')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="id_code_confirmation"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">تکرار
                            کد ملی</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="id_code_confirmation" id="id_code_confirmation"
                            value="{{ old('id_code_confirmation') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('id_code_confirmation')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="birth_date"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">تاریخ
                            تولد</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="birth_date" id="birth_date" value="{{ old('birth_date') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('birth_date')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="flex justify-between">
                        <label for="id_shenaseh"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">شماره
                            شناسنامه</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="id_shenaseh" id="id_shenaseh" value="{{ old('id_shenaseh') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('id_shenaseh')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="sadereh"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">صادره
                            از</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="sadereh" id="sadereh" value="{{ old('sadereh') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('sadereh')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="senph_province"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">استان
                            محل واحد صنفی</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="senph_province" id="senph_province"
                            value="{{ old('senph_province') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('senph_province')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="address"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">شهر و
                            خیابان اصلی</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="address" id="address" value="{{ old('address') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('address')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="plaque"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">کوچه
                            و پلاک</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="plaque" id="plaque" value="{{ old('plaque') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('plaque')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="phone"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">شماره
                            موبایل</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('phone')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label for="email"
                            class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold">ایمیل</label>
                    </div>
                    <div class="text-right w-full">
                        <input type="email" name="email" id="email"
                            class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200" />
                        @error('email')
                            <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center w-full mt-4">
            <div class="flex justify-start gap-4">
                <p class="text-slate-800 text-right mb-1">جنسیت:</p>
                <div class="flex justify-start items-center">
                    <input type="radio" name="gender" id="gender-male" value="male"
                        class="peer cursor-pointer" />
                    <label for="gender-male"
                        class="ps-2 text-sm text-gray-400 peer-checked:text-slate-800 cursor-pointer">مذکر</label>
                </div>
                <div class="flex justify-start items-center">
                    <input type="radio" name="gender" id="gender-female" value="female"
                        class="peer cursor-pointer" />
                    <label for="gender-female"
                        class="ps-2 text-sm text-gray-400 peer-checked:text-slate-800 cursor-pointer">مونث</label>
                </div>
                @error('gender')
                    <p class="text-xs text-red-600 mb-2 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <button
                class="block py-3 px-8 w-full text-sm text-white bg-primary hover:bg-primary/80 hover:shadow-xl shadow-white rounded-full transition-all duration-300">
                ثبت نام
            </button>
        </div>
    </form>
</x-auth-head>
