@extends('layouts.dashboard')

@section('content')
<div class="flex flex-wrap mt-4">
  <div class="w-full mb-12 xl:mb-0 px-4">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
      <div class="rounded-t mb-0 px-4 py-3 border-0">
        <div class="flex flex-wrap items-center">
          <div class="relative w-full px-4 max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-blueGray-700">
              Contributors
            </h3>
          </div>
          <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
            <a href="{{ route('contributors.exportToPdf') }}" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
              PDF
            </a>
          </div>
        </div>
      </div>
      <div class="block w-full overflow-x-auto">
        <!-- Projects table -->
        <table class="items-center w-full bg-transparent border-collapse">
          @if($contributors->isEmpty())
          <p class="text-red-700 text-center font-semibold p-6 text-xl">Data Kosong</p>
          @else
          <thead>
            <tr>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                No
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Nama
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Email
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                No Telepon
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Jumlah Donasi
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contributors as $i => $contributor)
            <tr>
              <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                {{ ($contributors->currentPage() - 1) * $contributors->perPage() + $i + 1 }}
              </th>
              <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                {{ $contributor->nama }}
              </th>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $contributor->email }}
              </td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $contributor->no_telepon }}
              </td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $contributor->jumlah }}
              </td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <form action="{{ route('contributors.destroy', $contributor->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="bg-red-500 text-white active:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 cursor-pointer" type="submit">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
            <!-- Modal for message -->
            @if (session('success'))
            <div id="success-alert" class="mb-3 hidden w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-800 data-[te-alert-show]:inline-flex" role="alert" data-te-alert-init data-te-alert-show>
              <strong class="mr-1">Success! </strong> {{ session('success') }}.
            </div>
            @endif
            @endif
            @if (request('success'))
            <div id="success-alert" class="mb-3 w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-800">
              <strong class="mr-1">Success! </strong> {{ request('success') }}.
            </div>
            @endif
            {{ $contributors->links() }}
          </tbody>
        </table>

        <div class="relative w-full px-4 py-3 mt-4 rounded bg-blue-900 text-white max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-blueGray-700">
            Total Donasi : {{ $total }}
            </h3>
          </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
  const successAlert = document.getElementById("success-alert");

  if (successAlert) {
  // Set a timer to hide the alert after 3 seconds
  setTimeout(function() {
    successAlert.style.display = "none";
  }, 3000);
}

  $(document).ready(function() {
    // Intercept form submit event
    $('form').submit(function(event) {
      event.preventDefault();

      // Get form action and method
      var action = $(this).attr('action');
      var method = $(this).attr('method');

      // Display confirmation alert
      Swal.fire({
        title: 'Kamu yakin?',
        text: 'Kamu tidak bisa mengembalikan data ini!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        cancelButtonText: 'Batalkan',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          // If user confirms, submit the form
          $.ajax({
            url: action,
            method: method,
            data: $(this).serialize(),
            success: function(response) {
              // Redirect to index page with success message
              window.location.href = "{{ route('contributors.index') }}?success=Data berhasil dihapus.";
            },
            error: function(xhr, status, error) {
              // Handle error
              console.error(xhr.responseText);
            }
          });
        }
      });
    });
  });
</script>
@endsection
