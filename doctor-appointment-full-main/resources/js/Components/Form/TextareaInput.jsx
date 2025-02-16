function TextareaInput({ label, id, name, value, onChange, placeholder }) {
    return (
      <div className="w-full mx-auto">
        <label htmlFor={id} className="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          {label}
        </label>
        <textarea
          id={id}
          name={name}
          value={value}
          onChange={onChange}
          className="p-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          aria-describedby={`${id}_help`}
          placeholder={placeholder}
        />
        {placeholder && (
          <div className="mt-1 text-sm text-gray-500 dark:text-gray-300" id={`${id}_help`}>
            {placeholder}
          </div>
        )}
      </div>
    );
  }

  export default TextareaInput;
