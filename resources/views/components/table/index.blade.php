<table class="min-w-full border-collapse block md:table">
    <thead class="block md:table-header-group">
    <tr class="border border-black md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
        {{ $heading }}
    </tr>
    </thead>
    <tbody class="block md:table-row-group">
    {{ $slot }}
    </tbody>
</table>
