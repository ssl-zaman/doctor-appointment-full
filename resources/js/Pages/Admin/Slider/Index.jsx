// resources/js/Pages/Slides/Index.jsx
import MainLayout from "@/Layouts/MainLayout";
import { Link } from "@inertiajs/react";
import { TrashIcon, PencilSquareIcon } from "@heroicons/react/24/outline";

export default function Index({ slides }) {
    return (
        <MainLayout>
            <div className="p-6 w-full mx-auto bg-white shadow-md rounded-lg">
                <h1 className="text-2xl font-bold mb-4">Slides List</h1>

                <Link
                    href={route("slider.create")}
                    className="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block"
                >
                    Create New Slide
                </Link>

                <table className="w-full mt-4">
                    <thead>
                        <tr className="bg-gray-100 border-b border-gray-300">
                            <th className="p-2 text-left">#</th>
                            <th className="p-2 text-left">Title 1</th>
                            <th className="p-2 text-left">Title 2</th>
                            <th className="p-2 text-left">Image</th>
                            <th className="p-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {slides.map((slide, index) => (
                            <tr key={slide.id} className="border-b border-gray-300">
                                <td className="p-2">{index + 1}</td>
                                <td className="p-2">{slide.title1}</td>
                                <td className="p-2">{slide.title2}</td>
                                <td className="p-2">
                                    <img
                                        src={`/storage/${slide.image}`}
                                        alt="Slide"
                                        className="w-16 h-16 object-cover rounded"
                                    />
                                </td>
                                <td className="p-2 flex items-center gap-2">
                                    <Link
                                        href={route("slider.edit", slide.id)}
                                        className="text-blue-500"
                                    >
                                        <PencilSquareIcon className="size-6" />
                                    </Link>

                                    <Link
                                        href={route("slider.destroy", slide.id)}
                                        method="delete"
                                        as="button"
                                        className="text-red-600"
                                    >
                                        <TrashIcon className="size-6" />
                                    </Link>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </MainLayout>
    );
}
