<x-auth-head>
    <form
            action="/auth/register"
            method="POST"
            class="xs:min-w-96 min-w-0 xs:w-1/2 w-full px-2 mb-6"
          >
            <div>
              <div>
                <div class="flex justify-between">
                  <label
                    for="phone"
                    class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold"
                    >شماره همراه</label
                  >
                </div>
                <div class="text-right w-full">
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200"
                  />
                </div>
              </div>
              <div class="mt-4">
                <div class="flex justify-between">
                  <label
                    for="id_code"
                    class="block text-right text-sm text-slate-600 dark:text-gray-400 mb-1 font-semibold"
                    >کد ملی</label
                  >
                </div>
                <div class="text-right w-full">
                  <input
                    type="text"
                    name="id_code"
                    id="id_code"
                    class="peer outline-none rounded-sm dark:bg-slate-800 dark:text-slate-200 border-[1px] w-full py-2 px-2 transition-all duration-200"
                  />
                </div>
              </div>
            </div>

            <div class="mt-4">
              <button
                class="block py-3 px-8 w-full text-sm text-white bg-primary hover:bg-primary/80 hover:shadow-xl shadow-white rounded-full transition-all duration-300"
              >
                ورود
              </button>
            </div>
          </form>
</x-auth-head>
