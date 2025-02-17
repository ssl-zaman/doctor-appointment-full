import MainLayout from "@/Layouts/MainLayout"
import { Link } from "@inertiajs/react"
import { TrashIcon, PencilSquareIcon } from "@heroicons/react/24/outline";


const Index = ({chambers}) => {
  return (
    <MainLayout>
         <div className="p-6 w-full mx-auto bg-white shadow-md rounded-lg">
                <h1 className="text-2xl font-bold mb-4">Chamber List</h1>

                <Link
                    href={route("chambers.create")}
                    className="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block"
                >
                    Create New Chamber
                </Link>

                <table className="w-full mt-4">
                    <thead>
                        <tr className="bg-gray-100 border-b border-gray-300">
                            <th className="p-2 text-left">#</th>
                            <th className="p-2 text-left">Hospital Name</th>
                            <th className="p-2 text-left">Location</th>
                            <th className="p-2 text-left">Contact Number</th>
                            <th className="p-2 text-left">Note</th>
                            <th className="p-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {chambers.map((item, index) => (
                            <tr key={item.id} className="border-b border-gray-300">
                                <td className="p-2">{index + 1}</td>
                                <td className="p-2">{item.hospital_name}</td>
                                <td className="p-2 max-w-[300px]">{item.location}</td>
                                <td className="p-2">{item.contact_number}</td>
                                <td className="p-2">{item.notes}</td>

                                <td className="p-2 flex items-center gap-2">
                                    <Link
                                        href={route("chambers.edit", item.id)}
                                        className="text-blue-500"
                                    >
                                        <PencilSquareIcon className="size-6" />
                                    </Link>

                                    <Link
                                        href={route("chambers.destroy", item.id)}
                                        method="delete"
                                        as="button"
                                        className="text-red-600"
                                        onClick={(e)=> {
                                            if(!confirm('Are you sure you want to delete this chamber? ')){
                                                e.preventDefault();
                                            }
                                        }}
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
  )
}

export default Index
