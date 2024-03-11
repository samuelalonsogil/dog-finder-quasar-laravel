<template>
  <div class="mt-12">
        <div class="flex justify-end m-2 p-2">
            <router-view
                :to="{name: 'SkillCreate'}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded" >New Skill
            </router-view>
        </div>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Slug
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit/Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4"> {{  }} </td>
                    <td class="px-6 py-4"> {{  }} </td>
                    <td class="px-6 py-4 space-x-2">
                        <router-view class="px-4 py-2 bg-blue-500 hover:bg-indigo-700 text-white rounded">
                            Edit
                        </router-view>
                        <button class="px-4 py-2 bg-red-500 hover:bg-indigo-700 text-white rounded"> Delete </button>
                    </td>
                </tr>
            </tbody>
        </table>
</div>

    </div>
</template>

<script>
</script>
