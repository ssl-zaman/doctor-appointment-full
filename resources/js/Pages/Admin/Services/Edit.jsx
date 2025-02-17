import InputField from "@/Components/Form/InputField";
import FileInput from "@/Components/Form/FileInput";
import MainLayout from "@/Layouts/MainLayout";
import { useForm, Link, router } from "@inertiajs/react";
import { useEffect } from "react";

const Edit = ({ service }) => {
    const { data, setData,  errors, processing } = useForm({
        name: service.name || "",
        description: service.description || "",
        image: null, // New file (if user uploads)
        icon: null,
    });

    useEffect(() => {
        console.log("Form Errors:", errors);
    }, [errors]);

    // Handle input changes
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setData(name, type === "checkbox" ? checked : value);
    };

    // Handle file input changes
    const handleFileChange = (e) => {
        const { name, files } = e.target;
        setData(name, files[0]); // Set only the first selected file
    };

    // Handle form submission
    const handleSubmit = (e) => {
        e.preventDefault();

        // Create FormData for file uploads

        const formData = new FormData();

        // Append all fields, including name and description
        formData.append("_method", "put"); // Ensure no null values
        formData.append("name", data.name || ""); // Ensure no null values
        formData.append("description", data.description || ""); // Ensure no null values

        // Append image if a new one is selected
        if (data.image) {
            formData.append("image", data.image);
        }

        if (data.icon) {
            formData.append("icon", data.icon);
        }

        console.log(formData)

        router.post(route("services.update", service.id), formData );
    };

    return (
        <MainLayout>
            <h2 className="text-2xl font-bold">Edit Service</h2>
            <div className="p-10 rounded-md bg-white shadow-md">
                <form onSubmit={handleSubmit} encType="multipart/form-data" className="space-y-4">
                    <InputField
                        label="Service Name"
                        name="name"
                        value={data.name || ""}
                        onChange={handleChange}
                        placeholder="Enter service name"
                        error={errors.name}
                    />

                    <InputField
                        label="Service Description"
                        name="description"
                        value={data.description || ""}
                        onChange={handleChange}
                        placeholder="Enter service description"
                        error={errors.description}
                    />

                    <FileInput
                        label="Service Icon"
                        name="icon"
                        onChange={handleFileChange}
                        defaultFile={service.icon ? `/storage/${service.icon}` : null}
                        error={errors.icon}
                        placeholder="Image size must be 50x50"
                    />

                    {service.image && (
                        <div>
                            <p className="text-sm text-gray-600">Current Image:</p>
                            <img
                                src={`/storage/${service.icon}`}
                                alt="Service Icon"
                                className="w-16 h-16 rounded-md border"
                            />
                        </div>
                    )}

                    <FileInput
                        label="Service Image"
                        name="image"
                        onChange={handleFileChange}
                        defaultFile={service.image ? `/storage/${service.image}` : null}
                        error={errors.image}
                        placeholder="Image size must be 50x50"
                    />

                    {service.image && (
                        <div>
                            <p className="text-sm text-gray-600">Current Image:</p>
                            <img
                                src={`/storage/${service.image}`}
                                alt="Service Image"
                                className="w-16 h-16 rounded-md border"
                            />
                        </div>
                    )}

                    <div className="flex justify-between gap-5">
                        <button
                            type="submit"
                            className="bg-blue-500 text-white px-5 py-3 rounded"
                            disabled={processing}
                        >
                            {processing ? "Updating..." : "Update Service"}
                        </button>
                        <Link
                            href={route("services.index")}
                            className="bg-red-500 text-white px-5 py-3 rounded"
                        >
                            Cancel
                        </Link>
                    </div>
                </form>
            </div>
        </MainLayout>
    );
};

export default Edit;
