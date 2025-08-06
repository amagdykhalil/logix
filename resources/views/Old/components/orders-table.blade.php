@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <style>
        .custom-table .dataTables_paginate.paging_full_numbers {
            display: none !important;
        }

        .dataTables_wrapper .dt-buttons {
            display: none !important;
        }

        .dataTables_paginate {
            margin-top: 10px !important;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }

        .paginate_button.page-item.active {
            background: #2A285E !important;
            color: white !important
        }

        .paginate_button {
            display: flex;
            align-items: center;
            justify-content: center;
            /* size: 19px; */
            width: 40px;
        }


        .paginate_button {
            border-radius: 9999px;
            padding: 0.5rem 0.9rem;
            background-color: #f3f4f6;
            color: #374151;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            cursor: pointer !important;
        }

        .paginate_button:hover {
            background-color: #e5e7eb;
            color: #111827;
        }

        .dataTables_info {
            display: none !important;
        }

        .paginate_button.current {
            background-color: #6366f1 !important;
            color: #fff !important;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .pagination {
            display: flex;
            flex-direction: row-reverse;
        }

        .paginate_button {
            border-radius: 0.5rem;
            margin: 0 0.25rem;
            padding: 0.375rem 0.75rem;
            background-color: white;
            color: #4a4a4a;
            border: 1px solid #e2e8f0;
        }

        .paginate_button.current {
            background-color: #4338ca !important;
            color: white !important;
        }

        .mfp-no-margins img.mfp-img {
            padding: 0;
            width: 100%;
            max-width: 700px !important;
        }

        .mfp-image-holder .mfp-content {
            max-width: 700px;
            width: 100%;
        }

        .mfp-no-margins .mfp-figure:after {
            top: 0;
            bottom: 0;
        }

        .mfp-no-margins .mfp-container {
            padding: 0;
        }

        .mfp-with-zoom .mfp-container,
        .mfp-with-zoom.mfp-bg {
            opacity: 0;
            transition: all 0.3s ease-out;
        }

        .mfp-with-zoom.mfp-ready .mfp-container {
            opacity: 1;
        }

        .mfp-with-zoom.mfp-ready.mfp-bg {
            opacity: 0.8;
        }

        .mfp-with-zoom.mfp-removing .mfp-container,
        .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0;
        }

        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        .dark .overflow-x-auto::-webkit-scrollbar-track {
            background: #2d3748;
        }

        .dark .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #4a5568;
        }
    </style>
@endpush


<div class="!p-0  overflow-x-hidden">
    <div
        class=" custom-table rounded-lg border border-border bg-[#f9f9fb] dark:bg-gray-800  shadow overflow-x-auto max-w-full">

        <div id="orders-table-skeleton" class="space-y-2">
            @for ($i = 0; $i < 8; $i++)
                <div class="flex animate-pulse rounded overflow-hidden">
                    @foreach ($headers as $header)
                        <div
                            class="h-[60px] w-full px-4 py-3 
                    {{ $loop->odd ? 'bg-white dark:bg-gray-800' : 'bg-[#f9f9fb] dark:bg-gray-800' }}">

                            @if (isset($header['type']) && $header['type'] === 'img')
                                <!-- صورة بشكل دائري -->
                                <div class="w-10 h-10 bg-gray-300 dark:bg-gray-700 rounded-full mx-auto"></div>
                            @else
                                <!-- شريط مستطيل -->
                                <div class="h-4 bg-gray-300 dark:bg-gray-700 rounded w-3/4 mx-auto"></div>
                            @endif

                        </div>
                    @endforeach
                </div>
            @endfor
        </div>



        <table class=" !m-0 table table-hover js-exportable-order orders-table w-full text-center hidden"
            style="font-weight: bold; min-width: 100%">

            <thead
                class="bg-[#f9f9fb] dark:bg-gray-800 text-[#81899B] dark:text-gray-300 text-sm rounded-lg overflow-hidden">
                <tr>
                    @foreach ($headers as $header)
                        <th class="relative group !px-0" data-column="{{ $loop->index }}">
                            <div
                                class="hover:bg-gray-200 dark:hover:bg-gray-600 bg-[#f9f9fb] dark:bg-gray-800 duration-300 !py-4 !px-4 flex items-center justify-center gap-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-up-down-icon lucide-arrow-up-down">
                                    <path d="m21 16-4 4-4-4" />
                                    <path d="M17 20V4" />
                                    <path d="m3 8 4-4 4 4" />
                                    <path d="M7 4v16" />
                                </svg>
                                <span class="text-nowrap">{{ $header['label'] }}</span>
                            </div>
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="text-sm text-[#A7ABB7] dark:text-gray-300">
                @foreach ($orders as $index => $order)
                    <tr
                        class="{{ $index % 2 === 0 ? '!bg-white dark:!bg-gray-800' : '!bg-[#f9f9fb] dark:!bg-gray-800' }}">
                        @foreach ($headers as $header)
                            <td class="py-2 !h-[40px] ">
                                @if (isset($header['type']) && $header['type'] === 'img')
                                    <a href="{{ asset($order->{$header['key']}) }}" class="image-popup">
                                        <img src="{{ asset($order->{$header['key']}) }}" alt="{{ $header['label'] }}"
                                            class="mx-auto w-[50px] h-[40px] object-fill  cursor-pointer hover:opacity-80 transition-opacity"
                                            width="40">
                                    </a>
                                @elseif ($header['key'] === 'payment_status')
                                    <span
                                        class="px-2 py-1 text-xs rounded-full
                                        {{ $order->{$header['key']} === 'تم الدفع'
                                            ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-200'
                                            : 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-200' }}">
                                        {{ $order->{$header['key']} }}
                                    </span>
                                @elseif ($header['key'] === 'package_type')
                                    <span
                                        class="px-2 py-1 text-xs rounded-full
                                        {{ $order->{$header['key']} === 'الباقة المميزة'
                                            ? 'bg-indigo-100 text-indigo-700 dark:bg-indigo-900 dark:text-indigo-200'
                                            : 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200' }}">
                                        {{ $order->{$header['key']} }}
                                    </span>
                                @else
                                    {{ $order->{$header['key']} }}
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="custom-pagination-wrapper" class="mt-4 flex justify-center"></div>

</div>



@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.image-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom',
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });

            const table = $('.js-exportable-order').DataTable({
                dom: '<"hidden"fB>rtip', // نخفي العناصر داخل الجدول لكن نبقيها قابلة للنقل
                buttons: {!! json_encode($datatableSettings['buttons']) !!},
                order: {!! json_encode($datatableSettings['order']) !!},
                paging: {{ $datatableSettings['paging'] ? 'true' : 'false' }},
                searching: {{ $datatableSettings['searching'] ? 'true' : 'false' }},
                info: {{ $datatableSettings['info'] ? 'true' : 'false' }},
                pagingType: "full_numbers",
                pageLength: {{ $datatableSettings['limit'] ?? 10 }},
                drawCallback: function() {
                    let paginate = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
                    $('#custom-pagination-wrapper').html(paginate.clone(true)); // clone with events
                },

                language: {
                    emptyTable: `
                            <div class="text-center py-10">
                                <img src="/images/no-data.svg" alt="لا توجد بيانات" class="mx-auto mb-4 w-32 h-32 opacity-50" />
                                <p class="text-gray-500">لا توجد بيانات لعرضها حاليًا.</p>
                            </div>
                        `,
                    paginate: {
                        first: '<i class="fas fa-angle-double-left"></i>',
                        previous: '<i class="fas fa-angle-left"></i>',
                        next: '<i class="fas fa-angle-right"></i>',
                        last: '<i class="fas fa-angle-double-right"></i>'
                    },
                    search: "ابحث:",
                    info: "عرض _START_ إلى _END_ من _TOTAL_ نتيجة",
                    infoEmpty: "عرض 0 من 0 نتيجة",
                    infoFiltered: "(مفلترة من _MAX_ إجمالي العناصر)"
                },
                initComplete: function() {
                    $('#orders-table-skeleton').hide();
                    $('.js-exportable-order').removeClass('hidden');
                }
            });

            if ($('#customCopyBtn').length) {
                $('#customCopyBtn').on('click', function() {
                    table.button('.buttons-copy').trigger();
                });
            }

            // Handle CSV
            if ($('#customCsvBtn').length) {
                $('#customCsvBtn').on('click', function() {
                    table.button('.buttons-csv').trigger();
                });
            }

            // Handle Excel
            if ($('#customExcelBtn').length) {
                $('#customExcelBtn').on('click', function() {
                    table.button('.buttons-excel').trigger();
                });
            }

            // Handle PDF
            if ($('#customPdfBtn').length) {
                $('#customPdfBtn').on('click', function() {
                    table.button('.buttons-pdf').trigger();
                });
            }

            // ✅ عند الكتابة في حقل البحث المخصص، فلتر الجدول
            $('#customSearchInput').on('input', function() {
                table.search(this.value).draw();
            });

        });
    </script>
@endpush
