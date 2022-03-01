<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Consumers') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <table>
        <thead>
            <tr>
                <th> id</th>
                <th> name</th>
                {{-- <th> last name  </th>
                <th> email </th>
                <th> phone</th>
                <th> adddress </th> --}}
            </tr>
        </thead>
        <tbody>
             @foreach($consumers as $consumer)
              <tr>
                  <td> {{$consumer->id}} </td>
                  <td> {{$consumer->name}} </td>
                  {{-- <td> {{$consumer->last_name}} </td>
                  <td> {{$consumer->email}} </td>
                  <td> {{$consumer->phone}} </td>
                  <td> {{$consumer->address}} </td> --}}
              </tr>
             @endforeach
       </tbody>
    </table>
    </div>

</x-app-layout>
{{-- {{ dump($consumers) }} --}}