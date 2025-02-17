import MainLayout from "@/Layouts/MainLayout"
import { Link } from "@inertiajs/react"
import { TrashIcon, PencilSquareIcon } from "@heroicons/react/24/outline";


const Index = ({solutions}) => {
  return (
    <MainLayout>
         <div className="p-6 w-full mx-auto bg-white shadow-md rounded-lg">
                <h1 className="text-2xl font-bold mb-4">Solutions List</h1>

                <Link
                    href={route("solutions.create")}
                    className="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block"
                >
                    Create New Solution
                </Link>

                <table className="w-full mt-4">
                    <thead>
                        <tr className="bg-gray-100 border-b border-gray-300">
                            <th className="p-2 text-left">#</th>
                            <th className="p-2 text-left">Name</th>
                            <th className="p-2 text-left">Description</th>
                            <th className="p-2 text-left">Image</th>
                            <th className="p-2 text-left">Status</th>
                            <th className="p-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {solutions.map((item, index) => (
                            <tr key={item.id} className="border-b border-gray-300">
                                <td className="p-2">{index + 1}</td>
                                <td className="p-2">{item.name}</td>
                                <td className="p-2 max-w-[300px]">{item.description}</td>
                                <td className="p-2">
                                    <img
                                        src={item.image.startsWith('http') ? item.image : `/storage/${item.image}`}
                                        alt="servies icon"
                                        className="w-16 h-16 object-cover rounded"
                                    />
                                </td>
                                <td>
                                    <Link href={route('solutions.statusToggle', item.id)} className={`p-2 ${item.status === 'active' ? 'border-green-500 text-green-500' : 'border-red-500 text-red-500'}  p-2 rounded-md border `}>
                                        {item.status}
                                    </Link>
                                </td>

                                <td className="p-2 flex items-center gap-2">
                                    <Link
                                        href={route("solutions.edit", item.id)}
                                        className="text-blue-500"
                                    >
                                        <PencilSquareIcon className="size-6" />
                                    </Link>

                                    <Link
                                        href={route("solutions.destroy", item.id)}
                                        method="delete"
                                        as="button"
                                        className="text-red-600"
                                        onClick={(e)=> {
                                            if(!confirm('Are you sure you want to delete this service? ')){
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
