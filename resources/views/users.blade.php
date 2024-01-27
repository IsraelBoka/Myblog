<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utilisateurs') }}
        </h2>
    </x-slot>

<div>
    
		<table class="min-w-full text-xs">
			<colgroup>
				<col>
				<col>
				<col>
				<col>
				<col>
				<col class="w-24">
			</colgroup>
			<thead class="bg-gray-300">
				<tr class="text-left">
					<th class="p-3">Invoice #</th>
					<th class="p-3">Client</th>
					<th class="p-3">Issued</th>
					<th class="p-3">Due</th>
					<th class="p-3 text-right">Amount</th>
					<th class="p-3">Status</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-b border-opacity-20 border-gray-300 bg-gray-50">
					<td class="p-3">
						<p>97412378923</p>
					</td>
					<td class="p-3">
						<p>Microsoft Corporation</p>
					</td>
					<td class="p-3">
						<p>14 Jan 2022</p>
						<p class="text-gray-600">Friday</p>
					</td>
					<td class="p-3">
						<p>01 Feb 2022</p>
						<p class="text-gray-600">Tuesday</p>
					</td>
					<td class="p-3 text-right">
						<p>$15,792</p>
					</td>
					<td class="p-3 text-right">
						<span class="px-3 py-1 font-semibold rounded-md bg-pink-600 text-gray-50">
							<span>Pending</span>
						</span>
					</td>
				</tr>
				<tr class="border-b border-opacity-20 border-gray-300 bg-gray-50">
					<td class="p-3">
						<p>97412378923</p>
					</td>
					<td class="p-3">
						<p>Tesla Inc.</p>
					</td>
					<td class="p-3">
						<p>14 Jan 2022</p>
						<p class="text-gray-600">Friday</p>
					</td>
					<td class="p-3">
						<p>01 Feb 2022</p>
						<p class="text-gray-600">Tuesday</p>
					</td>
					<td class="p-3 text-right">
						<p>$275</p>
					</td>
					<td class="p-3 text-right">
						<span class="px-3 py-1 font-semibold rounded-md bg-pink-600 text-gray-50">
							<span>Pending</span>
						</span>
					</td>
				</tr>
				<tr class="border-b border-opacity-20 border-gray-300 bg-gray-50">
					<td class="p-3">
						<p>97412378923</p>
					</td>
					<td class="p-3">
						<p>Coca Cola co.</p>
					</td>
					<td class="p-3">
						<p>14 Jan 2022</p>
						<p class="text-gray-600">Friday</p>
					</td>
					<td class="p-3">
						<p>01 Feb 2022</p>
						<p class="text-gray-600">Tuesday</p>
					</td>
					<td class="p-3 text-right">
						<p>$8,950,500</p>
					</td>
					<td class="p-3 text-right">
						<span class="px-3 py-1 font-semibold rounded-md bg-pink-600 text-gray-50">
							<span>Pending</span>
						</span>
					</td>
				</tr>
				<tr class="border-b border-opacity-20 border-gray-300 bg-gray-50">
					<td class="p-3">
						<p>97412378923</p>
					</td>
					<td class="p-3">
						<p>Nvidia Corporation</p>
					</td>
					<td class="p-3">
						<p>14 Jan 2022</p>
						<p class="text-gray-600">Friday</p>
					</td>
					<td class="p-3">
						<p>01 Feb 2022</p>
						<p class="text-gray-600">Tuesday</p>
					</td>
					<td class="p-3 text-right">
						<p>$98,218</p>
					</td>
					<td class="p-3 text-right">
						<span class="px-3 py-1 font-semibold rounded-md bg-pink-600 text-gray-50">
							<span>Pending</span>
						</span>
					</td>
				</tr>
			</tbody>
		</table>
</div>
</x-app-layout>
